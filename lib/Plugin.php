<?php

namespace CustomPostsTables;

class Plugin {

    private static $instance = null;

    public function __construct() {
        add_action( 'init', [ $this, 'enqueueScripts' ] );
        add_action( 'init', [ $this, 'addShortCode' ] );
    }

    public function addShortCode() {
        add_shortcode( 'cptables', [ $this, 'theShortCode' ] );
    }

    public function theShortCode() {
        extract(shortcode_atts(array('type'=>'type'), $type));
        require_once('templates/header.php');
        require_once('templates/body.php');
    }

    public function enqueueScripts() {
        wp_enqueue_script( 'custompoststables-js', __DIR__.'assets/js/custompoststables.js' );
        wp_enqueue_style( 'custompoststables-css', __DIR__.'assets/css/custompoststables.css' );
    }

    public static function getInstance() {
        if( is_null( self::$instance == null) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}