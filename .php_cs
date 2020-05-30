<?php

require_once __DIR__ . '/vendor/autoload.php';

$finder = PhpCsFixer\Finder::create()
	->exclude(array(
		__DIR__ . '/vendor'
	))
	->in(array(
		__DIR__ .  '/src',
	))
;

return PhpCsFixer\Config::create()
	->setRules([
        '@PSR2' => true,
        'align_multiline_comment' => true,
        'array_indentation' => true,
        'array_syntax' => true,
        'whitespace_after_comma_in_array' => true,
        'blank_line_after_namespace' => true,
        'blank_line_after_opening_tag' => true,
        'strict_param' => false,
        'cast_spaces' => true,
        'concat_space' => ['spacing' => 'one'],
        'unary_operator_spaces' => true,
        'function_typehint_space' => true,
        'return_type_declaration' => ['space_before' => 'one'],
        'binary_operator_spaces' => true,
        'class_attributes_separation' => true,
        'class_definition' => ['single_line' => true],
        'phpdoc_order' => true,
        'phpdoc_trim' => true,
        'phpdoc_types' => true,
        'semicolon_after_instruction' => true,
        'single_blank_line_before_namespace' => true,
        'ternary_operator_spaces' => true,
        'trim_array_spaces' => true
	])
	->setFinder($finder);
