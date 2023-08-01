<?php

namespace Elementor;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use ELementor\Repeater;

if (!defined('ABSPATH')) exit; // Exit if accessed directly and CF7 Not install

/**
 * CB Core Demo
 *
 * CB Core widget for Demo.
 *
 * @since 1.0.0
 */
class CB_Core_Work_Process extends Widget_Base
{

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name()
	{
		return 'cb-work-process';
	}

	/**
	 * Retrieve the widget title.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title()
	{
		return __('CB Work Process', 'cb-core');
	}

	/**
	 * Retrieve the widget icon.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon()
	{
		return 'eicon-post-list';
	}

	/**
	 * Retrieve the list of categories the widget belongs to.
	 *
	 * Used to determine where to display the widget in the editor.
	 *
	 * Note that currently Elementor supports only one category.
	 * When multiple categories passed, Elementor uses the first one.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	public function get_categories()
	{
		return ['cb-cat'];
	}

	/**
	 * Retrieve the list of scripts the widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends()
	{
		return ['cb-core'];
	}

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function register_controls()
	{
		$this->start_controls_section(
			'section_select_layout',
			[
				'label' => __('Layout', 'cb-core'),
			]
		);
		$this->add_control(
			'layout',
			[
				'label' => __('Layout', 'cb-core'),
				'type' => \Elementor\Controls_Manager::SELECT,
				'options' => [
					'layout-1' => __('Layout 1', 'cb-core')
				],
				'default' => 'layout-1',
				'toggle' => true,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'_section_work_process',
			[
				'label' => __('Work Process Content', 'cb-core'),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// main controls here]
        
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
         'field_condition',
         [
           'label'   => esc_html__( 'Field Condition', 'cb-core' ),
           'type' => \Elementor\Controls_Manager::SELECT,
            'label_block' => true,
            'options' => [
             'style-1'  => esc_html__( 'Style 1', 'cb-core' ),
           ],
           'default' => 'style-1',
         ]
        );
         $repeater->add_control(
         'count',
           [
             'label'   => esc_html__( 'Count', 'cb-core' ),
             'type'        => \Elementor\Controls_Manager::NUMBER,
             'default'     => esc_html__( '1', 'cb-core' ),
             'label_block' => true,
             'condition' => [
                'field_condition' => ['style-1']
             ]
           ]
         );
         $repeater->add_control(
          'shape_color',
          [
            'label'       => esc_html__( 'Shape Color', 'cb-core' ),
            'type'     => \Elementor\Controls_Manager::COLOR,
            'default' => '#CCC8FF',
            'selectors' => [
            '{{WRAPPER}} {{CURRENT_ITEM}} .count-shape' => 'background-color: {{VALUE}}',
            ],
          ]
         );
         $repeater->add_control(
         'title',
           [
             'label'   => esc_html__( 'Title', 'cb-core' ),
             'type'        => \Elementor\Controls_Manager::TEXT,
             'label_block' => true,
             'condition' => [
                'field_condition' => ['style-1']
             ]
           ]
         );
         $repeater->add_control(
         'excerpt',
           [
             'label'   => esc_html__( 'Service Excerpt', 'cb-core' ),
             'type'        => \Elementor\Controls_Manager::TEXTAREA,
             'label_block' => true,
             'condition' => [
                'field_condition' => ['style-1']
             ]
           ]
         );
         $this->add_control(
           'slides',
           [
             'label'       => esc_html__( 'Service Slide', 'cb-core' ),
             'type'        => \Elementor\Controls_Manager::REPEATER,
             'fields'      => $repeater->get_controls(),
             'title_field' => '{{{ title }}}',
           ]
         );
		 $this->add_control(
		 'btn_text_1',
		  [
			 'label'       => esc_html__( 'Button Text 1', 'cb-core' ),
			 'type'        => \Elementor\Controls_Manager::TEXT,
			 'default'     => esc_html__( "LET'S TALK", 'cb-core' ),
			 'placeholder' => esc_html__( 'Button Text 1', 'cb-core' ),
			 'condition' => [
                'layout' => ['layout-1']
             ]
		  ]
		 );
		 $this->add_control(
		  'btn_link_1',
		  [
			'label'   => esc_html__( 'Button Link 1', 'cb-core' ),
			'type'        => \Elementor\Controls_Manager::URL,
			'default'     => [
				'url'               => '#',
				'is_external'       => true,
				'nofollow'          => true,
				'custom_attributes' => '',
			  ],
			  'placeholder' => esc_html__( 'Placeholder Text', 'cb-core' ),
			  'label_block' => true,
			  'condition' => [
                'layout' => ['layout-1']
             ]
			]
		  );
		  $this->add_control(
			'btn_text_2',
			 [
				'label'       => esc_html__( 'Button Text 2', 'cb-core' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'default'     => esc_html__( "CASE STUDIES", 'cb-core' ),
				'placeholder' => esc_html__( 'Button Text 2', 'cb-core' ),
				'condition' => [
				   'layout' => ['layout-1']
				]
			 ]
		);

		$this->add_control(
			'btn_link_2',
			[
			  'label'   => esc_html__( 'Button Link 2', 'cb-core' ),
			  'type'        => \Elementor\Controls_Manager::URL,
			  'default'     => [
				  'url'               => '#',
				  'is_external'       => true,
				  'nofollow'          => true,
				  'custom_attributes' => '',
				],
				'placeholder' => esc_html__( 'Placeholder Text', 'cb-core' ),
				'label_block' => true,
				'condition' => [
				  'layout' => ['layout-1']
			   ]
			]
		);
		$this->end_controls_section();
	}

	/**
	 * Render the widget oucbut on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render()
	{

		$settings = $this->get_settings(); ?>

        <?php include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
	}
}

Plugin::instance()->widgets_manager->register(new CB_Core_Work_Process());
