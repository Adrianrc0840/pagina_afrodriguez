<?php get_header(); ?>

<style>
.page-404 {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-dark);
    position: relative;
    overflow: hidden;
    text-align: center;
}
.page-404::before {
    content: '404';
    position: absolute;
    font-size: clamp(180px, 30vw, 320px);
    font-weight: 900;
    color: rgba(245, 90, 13, 0.04);
    letter-spacing: -0.05em;
    line-height: 1;
    user-select: none;
    pointer-events: none;
}
.error-content {
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 24px;
}
.error-logo { height: 64px; width: auto; object-fit: contain; margin-bottom: 40px; }
.error-number { font-size: clamp(5rem, 15vw, 10rem); font-weight: 900; line-height: 1; color: var(--orange); letter-spacing: -0.03em; margin-bottom: 16px; }
.error-divider { width: 60px; height: 4px; background: var(--orange); margin: 0 auto 28px; }
.error-title { font-size: clamp(1.2rem, 3vw, 1.8rem); font-weight: 800; letter-spacing: 0.05em; text-transform: uppercase; color: var(--white); margin-bottom: 16px; }
.error-text { font-size: 0.95rem; color: var(--gray-light); max-width: 420px; line-height: 1.8; margin-bottom: 40px; }
.error-actions { display: flex; gap: 16px; flex-wrap: wrap; justify-content: center; }
.btn-outline { display: inline-block; border: 2px solid rgba(245, 90, 13, 0.5); color: var(--orange); padding: 13px 32px; font-size: 0.875rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; transition: border-color 0.2s, background 0.2s; }
.btn-outline:hover { border-color: var(--orange); background: rgba(245, 90, 13, 0.08); }
.error-truck { font-size: 3.5rem; color: rgba(245, 90, 13, 0.25); margin-bottom: 32px; }
</style>

<div class="page-404">
    <div class="error-content">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Logo.jpeg" alt="AF Rodríguez" class="error-logo">
        </a>
        <div class="error-truck"><i class="fas fa-truck-moving"></i></div>
        <div class="error-number">404</div>
        <div class="error-divider"></div>
        <h1 class="error-title">Página no encontrada</h1>
        <p class="error-text">Parece que esta ruta no existe o la carga fue enviada a otro destino. Regresa al inicio y encuentra lo que buscas.</p>
        <div class="error-actions">
            <a href="<?php echo home_url('/'); ?>" class="btn-orange">
                <i class="fas fa-home" style="margin-right:8px"></i>Volver al inicio
            </a>
            <a href="<?php echo home_url('/#contacto'); ?>" class="btn-outline">Contacto</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>
