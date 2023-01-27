<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $loginCheck = [
        'username' => 'required',
        'passwort' => 'required',
        'agbaccept' => 'required'];
    public $loginCheck_errors = [
        'username' => [
            'required' => 'Bitte tragen Sie einen Namen ein.'],
        'passwort' => [
            'required' => 'Bitte geben Sie ein Passwort ein.'],
        'agbaccept' => [
            'required' => 'Bitte bestätigen Sie die AGBs'],
    ];
}
