<?php
ob_start();

$ext = getenv('LINK_EXT');
$ACTIVE_MENU = 'tos';
$LANG='es';
?>

    <h2>Términos de servicio de MindWarrior</h2>

    <p style="padding-top: 0"><sub>Fecha de entrada en vigor: 2025-12-17</sub></p>

<p>MindWarrior es operado por una persona residente en Australia (<i>nosotros</i>, <i>nuestro</i>).</p>

<p>Al utilizar MindWarrior (el <i>Servicio</i>), aceptas estos Términos.</p>

<h3>1) El Servicio</h3>
<p>MindWarrior es un juego de autorreflexión / crecimiento personal que puede incluir recordatorios, mensajes y una página de <i>Fórmulas públicas</i> que contiene ejemplos seleccionados enviados por los jugadores.</p>

<h3>2) No es asesoramiento profesional</h3>
<p>El Servicio y cualquier Fórmula pública se proporcionan únicamente con fines de información general e inspiración. <strong>No</strong> constituyen asesoramiento médico, de salud mental/psicológico, legal ni financiero, y no sustituyen la atención profesional.</p>
<p>Si estás en peligro inmediato o necesitas ayuda urgente, contacta con los servicios de emergencia locales. En Australia, puedes contactar con <strong>Lifeline 13 11 14</strong>.</p>

<h3>3) Requisitos de edad</h3>
<p>Debes tener al menos <strong>16 años</strong>, o contar con el permiso de un padre/madre o tutor/a, para utilizar el Servicio.</p>

<h3>4) Uso aceptable</h3>
<p>Aceptas no utilizar el Servicio para infringir la ley o vulnerar los derechos de otras personas; acosar/amenazar/ difamar/suplantar a nadie; enviar o publicar datos personales de otras personas (incluidos nombres o datos de contacto); enviar texto con copyright que no te pertenezca; promover el odio, la autolesión, la violencia o actividades ilegales; o interferir con el Servicio (incluyendo spam, scraping, hacking o abuso).</p>

<h3>5) Envíos de jugadores y Fórmulas públicas</h3>
<p>Los envíos <strong>no se publican automáticamente</strong>. Podemos revisar, editar, rechazar o eliminar envíos en cualquier momento.</p>
<p>Si envías una Fórmula para su posible publicación, confirmas que es tu obra original (o que tienes derechos para enviarla) y que no incluye datos personales de otras personas, contenido difamatorio ni instrucciones dañinas/ilegales.</p>

<h3>6) CC0 (dominio público) para Fórmulas publicadas</h3>
<p>Si publicamos tu envío como una Fórmula pública, aceptas que se publique bajo <strong>CC0 (dominio público)</strong>. Esto significa que cualquiera puede usarla sin pedirte permiso. Aceptas que podamos darle formato o editarla para mayor claridad y seguridad.</p>

<h3>7) Reportes y solicitudes de retirada</h3>
<p>Podemos eliminar cualquier Fórmula pública en cualquier momento. Para reportar una Fórmula pública o solicitar su retirada, contáctanos (ver abajo) con un enlace (o detalles suficientes para encontrarla). Si eres quien la envió, también puedes contactarnos usando el mismo método que utilizaste para enviarla.</p>

<h3>8) Servicios de terceros</h3>
<p>El Servicio puede utilizar plataformas y proveedores de terceros (por ejemplo, Telegram y servicios de hosting/infraestructura). Sus términos y políticas también se aplican a tu uso de esos servicios.</p>

<h3>9) Privacidad</h3>
<p>Tu uso del Servicio también se rige por nuestra <strong><a href="/privacy-policy.<?=$LANG;?>.<?=$ext;?>">Política de privacidad</a></strong>.</p>

<h3>10) Disponibilidad y cambios</h3>
<p>Podemos cambiar, suspender o interrumpir el Servicio (o cualquier parte de él) en cualquier momento. No garantizamos que el Servicio esté siempre disponible, sin interrupciones o libre de errores.</p>

<h3>11) Exenciones de responsabilidad</h3>
<p>En la medida permitida por la ley, el Servicio se proporciona <strong>“tal cual”</strong> y <strong>“según disponibilidad”</strong>, sin garantías.</p>

<h3>12) Limitación de responsabilidad</h3>
<p>En la medida permitida por la ley, no somos responsables de pérdidas indirectas o consecuentes (incluida la pérdida de datos, beneficios o reputación) derivadas de tu uso del Servicio.</p>
<p>Nada en estos Términos excluye las garantías al consumidor que no puedan excluirse conforme a la <strong>Ley del Consumidor Australiana</strong> (Australian Consumer Law).</p>

<h3>13) Ley aplicable</h3>
<p>Estos Términos se rigen por las leyes de <strong>Australia</strong>. Cualquier disputa se somete a los tribunales de <strong>Queensland</strong> (salvo que la ley imperativa disponga otra cosa).</p>

<h3>14) Cambios en estos Términos</h3>
<p>Podemos actualizar estos Términos de vez en cuando para reflejar cambios en el Servicio, requisitos legales o la forma en que operamos. Si realizamos cambios, actualizaremos la “Fecha de entrada en vigor” al inicio de esta página. Tu uso continuado del Servicio después de que se publiquen los Términos actualizados significa que aceptas los cambios. Si no estás de acuerdo con los Términos actualizados, debes dejar de usar el Servicio.</p>

<h3>15) Contacto</h3>
<p>Preguntas sobre estos Términos: <strong><a href="https://t.me/MindWarriorSupport_bot" target="_blank">Telegram</a></strong> o <strong><a href="https://github.com/mindwarriorgame/mindwarrior-telegram-bot/issues" target="_blank">GitHub</a></strong>. (Por favor, no incluyas información personal sensible en incidencias de GitHub.)</p>

<?php
$CONTENT = ob_get_contents();
ob_end_clean();

$MENU_SELECTED = "tos";
$MENU = include("includes/menu.$LANG.php");

$TITLE="MindWarrior: Términos de servicio";

$CSS = ["includes/quick-start.css"];
$JS = [];

include("includes/layout.php");
?>
