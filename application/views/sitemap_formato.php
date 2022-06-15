<?= '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?= base_url('Home') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Nossa_Historia') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Faq/1') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Faq/2') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Contato') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Login') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Cadastro') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Guia_para_Empresas') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Termos_e_Condicoes') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Politica_de_Privacidade') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/locacao-de-espaco/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/alimentacao-e-bebidas/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/som-e-iluminacao/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/decoracao/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/flores-e-arranjos/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/foto-e-filmagem/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/locacao-de-brinquedos/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/brindes-e-lembrancinhas/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/musicos-e-bandas/Menor-para-maior-preco') ?></loc>
    </url>
    <url>
        <loc><?= base_url('Mercado/1/entretenimento/Menor-para-maior-preco') ?></loc>
    </url>
    <?php for($i = 0; $i < count($pacotes); $i++){ ?>
    <url>
        <loc><?= base_url('Pagina_Anuncio/'.$pacotes[$i]['npacote']) ?></loc>
		<lastmod><?= $pacotes[$i]['modificado'] ?></lastmod>
        <?= $img[$i] ?>
    </url><?php
    }
   ?>
</urlset>