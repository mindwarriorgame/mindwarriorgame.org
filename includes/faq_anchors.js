const FAQ_MENU_ITEM_ELTS = document.querySelectorAll("#sidebar li[data-target]");
const CONTENT_ELT = document.querySelector(".content");

class ActiveMenuItemUpdater {
    constructor() {
        this.activeMenuItemElt = null;
    }

    setActiveQuestion(menuItemElt) {
        if (this.activeMenuItemElt) {
            this.activeMenuItemElt.classList.remove("active");
        }
        menuItemElt.classList.add("active");
        this.activeMenuItemElt = menuItemElt;
    }

    startListenContentScrolling() {
        if (this._onContentScrollCallback) {
            return;
        }
        this._onContentScrollCallback = this._onContentScroll.bind(this);
        CONTENT_ELT.addEventListener("scroll", this._onContentScrollCallback);
    }

    stopListenFaqContentScrolling() {
        CONTENT_ELT.removeEventListener("scroll", this._onContentScrollCallback);
        this._onScrollCallback = null;
    }

    _onContentScroll() {
        for (let idx = 0; idx < FAQ_MENU_ITEM_ELTS.length; idx++) {
            const faqMenuItemElt = FAQ_MENU_ITEM_ELTS[idx];
            const targetQuestionSelector = '#smooth-' + faqMenuItemElt.getAttribute("data-target").substring(1);
            const targetQuestionElt = CONTENT_ELT.querySelector(targetQuestionSelector);

            const nextQuestionElt = idx < FAQ_MENU_ITEM_ELTS.length - 1 ? FAQ_MENU_ITEM_ELTS[idx + 1] : undefined;
            const nextTargetSelector = nextQuestionElt ? nextQuestionElt.getAttribute("data-target") : undefined
            const nextTargetElement = nextQuestionElt ? CONTENT_ELT.querySelector(nextTargetSelector) : undefined;

            if (targetQuestionElt) {
                const targetRect = targetQuestionElt.getBoundingClientRect();
                const isTargetCandidate = targetRect.top >= 0 && targetRect.top <= 150;
                const isTargetAboveViewport = targetRect.top < 0;

                const nextRect = nextTargetElement ? nextTargetElement.getBoundingClientRect() : undefined;
                const isNextFarBeyond = nextRect && nextRect.top > 150;

                if (isTargetCandidate || (isTargetAboveViewport && isNextFarBeyond)) {
                    this.setActiveQuestion(faqMenuItemElt);
                    break;
                }
            } else {
                console.error("Failed to calculate activeQuestion, not found", targetQuestionSelector);
            }
        }
    }
}

const activeMenuItemUpdater = new ActiveMenuItemUpdater();

function initFaqQuestionsLinks() {
    FAQ_MENU_ITEM_ELTS.forEach((question) => {
        const targetId = question.getAttribute("data-target");
        question.addEventListener("click", () => {
            window.location.hash = targetId;
        });
    });
}

function onAnchorChanged(anchor) {
    const questionMenuItemElt = document.querySelector(`#sidebar li[data-target="${anchor}"]`);
    if (!questionMenuItemElt) {
        console.log("Cannot find FAQ question", anchor);
        return;
    }

    const targetQuestionSelector = '#smooth-' + anchor.substring(1);
    document.querySelector(targetQuestionSelector).scrollIntoView({
        behavior: "smooth",
        block: "start",
    });
    activeMenuItemUpdater.setActiveQuestion(questionMenuItemElt);

    activeMenuItemUpdater.stopListenFaqContentScrolling();
    setTimeout(() => {
        activeMenuItemUpdater.startListenContentScrolling();
    }, 2000);
}

function watchAnchorChanges() {
    let lastProcessedAnchor = "";
    setInterval(() => {
        if (window.location.hash !== lastProcessedAnchor) {
            lastProcessedAnchor = window.location.hash;

            onAnchorChanged(lastProcessedAnchor)
        }
    }, 100);
}

initFaqQuestionsLinks();
watchAnchorChanges();
activeMenuItemUpdater.startListenContentScrolling();