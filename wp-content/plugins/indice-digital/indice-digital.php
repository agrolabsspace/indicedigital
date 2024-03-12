<?php

    /*
    Plugin Name: Índice de Transformação Digital
    Description: Este plugin adiciona um formulário para calculo do grau de maturidade digital da propriedade ou negócio.
    Version: 1.0
    Author: Evel Up 
    Author URI: https://evelup.com.br/
    */
    
    //Função onde está o formulário
    function exibir_questionario(){
        $conteudo_html = get_option('conteudo_html');
        return $conteudo_html;
    }
    
    //Função para exibir o formulário
    add_shortcode('exibir_questionario', 'exibir_questionario');
    
    
    //Função que contém as informações do plugin no menu
    function meuMenu(){
        add_menu_page('indice-digital','IMDFT','manage_options','indice-digital','indicedigital_page','',200);
        
    }
    
    //Função para adicionar informações do plugin no menu
    add_action('admin_menu','meuMenu');
    
    //Função para adicionar conteudo à página do plugin no painel Wordpress
    function indicedigital_page(){
        if(array_key_exists('acao', $_POST)){
            update_option('conteudo_html',$_POST['conteudo_html']);

            echo ' <div class="notice notice-success is-dismissible"> 
                        <p><strong>As alterações foram salvas com sucesso!</strong></p>
                        <button type="button" class="notice-dismiss">
                            <span class="screen-reader-text">Fechar</span>
                        </button>
                    </div> ';
    }
        
        $conteudo_html = get_option('conteudo_html');
        
        echo '

            <div class="wrap">
                <h2>Bem-vindo(a) ao painel do IMDFT</h2>
                <form method="post">
                    <label for="nome">Conteudo do Formulário:</label>
                    <textarea name="conteudo_html" class="large-text" placeholder="Conteudo HTML">'.$conteudo_html.'</textarea>
                    <input type="submit" name="acao" value="Salvar" class="button button-primary"/>
                </form>
            </div>

        ';

    }
    
?>