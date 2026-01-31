document.addEventListener("DOMContentLoaded", () => {
    const tabGroups = document.querySelectorAll("[data-platform-tabs]");
    tabGroups.forEach((group) => {
        const panelFilter = group.getAttribute("data-target-panel-filter");
        const tabsContainer = group.querySelector(".platform-tabs");
        const panels = group.querySelectorAll("[data-platform-panel]");
        if (tabsContainer && panels.length > 0 && tabsContainer.parentElement !== group) {
            group.insertBefore(tabsContainer, panels[0]);
        }
        const tabs = group.querySelectorAll("[data-platform-tab]");

        const activate = (target) => {
            tabs.forEach((tab) => {
                const isActive = tab.dataset.platformTab === target;
                tab.classList.toggle("active", isActive);
                tab.setAttribute("aria-selected", isActive ? "true" : "false");
            });
            panels.forEach((panel) => {
                if (panel.getAttribute("data-target-panel-filter") !== panelFilter) {
                    return;
                }
                panel.classList.toggle("active", panel.dataset.platformPanel === target);
            });
        };

        tabs.forEach((tab) => {
            tab.addEventListener("click", () => activate(tab.dataset.platformTab));
        });

        const initial = group.dataset.defaultPlatform || "telegram";
        activate(initial);
    });
});
