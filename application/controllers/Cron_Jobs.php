<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron_Jobs extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('my_formulas');
		$this->load->library('email');
		$this->load->library('session');
		$this->output->enable_profiler(true);
        error_reporting(0);

        $this->load->model('Cron_Jobs_model');
		
	}
	
	public function sitemap()
	{

        //Buscar dados para a criação do arquivo
        $pacotes = $this->Cron_Jobs_model->buscar_pacotes();

        for($i = 0; $i < count($pacotes); $i++){    
            $imagens = $this->Cron_Jobs_model->buscar_imagens($pacotes[$i]['npacote']);
            foreach($imagens as $linha){
                $img[$i] .= '<image:image>
                                 <image:loc>'.base_url('FrondEnd/img/pacotes/'.$pacotes[$i]['nempresa'].'/'.$pacotes[$i]['npacote'].'/'.$linha['imagem']).'</image:loc>
                             </image:image>';
            }
        }
        
        //Envelopando dados para passar pra view
        $dados['pacotes'] = $pacotes;
        $dados['img'] = $img;
		
        //Criando arquivo compactado
        $nome_do_arquivo = 'sitemap.xml.gz';
		$text = $this->load->view('sitemap_formato', $dados, true);
        $gzip = gzencode($text);
		write_file($nome_do_arquivo, $gzip, 'w');
        
        //Url do sitemap
        $sitemapUrl = 'https://empireevents.com.br/sitemap.xml.gz';

        //Google
        $url = "http://www.google.com/webmasters/sitemaps/ping?sitemap=".$sitemapUrl;
        $returnCode = myCurl($url);
        //echo "<p>Google Sitemaps has been pinged (return code: $returnCode).</p>";
						
	}

 }