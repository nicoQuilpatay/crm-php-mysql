<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Ventas para Negocios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header class="hero">
    <h1>Gestiona tu negocio de forma eficiente</h1>
    <p>Optimiza tu proceso de ventas y toma decisiones informadas con nuestra plataforma de gestión.</p>
    <a href="#contact" class="cta-button">Solicita una Demo</a>
</header>

<section class="features">
    <h2>Beneficios</h2>
    <div class="feature-item">
        <h3>Control de Inventario</h3>
        <p>Administra tu inventario en tiempo real para evitar faltantes o excesos de productos.</p>
    </div>
    <div class="feature-item">
        <h3>Reportes Detallados</h3>
        <p>Obtén reportes financieros y de ventas detallados para tomar decisiones informadas.</p>
    </div>
    <div class="feature-item">
        <h3>Gestión de Clientes</h3>
        <p>Mantén un registro de tus clientes y sus preferencias para mejorar la experiencia de compra.</p>
    </div>
</section>

<section class="cta">
    <h2>¿Listo para mejorar tu negocio?</h2>
    <p>Deja que nuestra plataforma te ayude a gestionar tus ventas de manera eficiente y aumentar tus ingresos.</p>
    <a href="#contact" class="cta-button">Contáctanos para más información</a>
</section>

<section id="contact" class="contact">
    <h2>Contáctanos</h2>
    <p>Completa el formulario y te contactaremos en breve.</p>
    <form action="contact.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="message">Mensaje:</label>
        <textarea id="message" name="message" required></textarea>
        
        <button type="submit">Enviar</button>
    </form>
</section>

<footer>
    <p>&copy; 2024 Gestión de Ventas para Negocios. Todos los derechos reservados.</p>
</footer>

</body>
</html>
