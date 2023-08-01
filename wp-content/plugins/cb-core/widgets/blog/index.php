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
class CB_Core_Blog extends Widget_Base
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
		return 'cb-blog';
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
		return __('CB Blog', 'cb-core');
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
			'_section_blog',
			[
				'label' => __('Blog Content', 'cb-core'),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// main controls here]
        $this->add_control(
        'title',
         [
            'label'       => esc_html__( 'Section Title', 'cb-core' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
            'condition' => [
                'layout' => 'layout-1'
            ],
            'default'     => esc_html__( "We're glad to see you at news", 'cb-core' ),
            'placeholder' => esc_html__( 'Section Title', 'cb-core' ),
         ]
        );
        $this->add_control(
        'subtitle',
         [
            'label'       => esc_html__( 'Section Subtitle', 'cb-core' ),
            'type'        => \Elementor\Controls_Manager::TEXT,
            'label_block' => true,
            'condition' => [
                'layout' => 'layout-1'
            ],
            'default'     => esc_html__( "UiExpertz Latest Blogs", 'cb-core' ),
            'placeholder' => esc_html__( 'Section Subtitle', 'cb-core' ),
         ]
        );
        $this->add_control(
        'content',
         [
            'label'       => esc_html__( 'Section Content', 'cb-core' ),
            'type'        => \Elementor\Controls_Manager::TEXTAREA,
            'label_block' => true,
            'condition' => [
                'layout' => 'layout-1'
            ],
            'default'     => esc_html__( "Facilisis mauris sit amet massa vitae tortor condimentum.", 'cb-core' ),
            'placeholder' => esc_html__( 'Section Content', 'cb-core' ),
         ]
        );
        $this->add_control(
            'btn_text',
             [
                'label'       => esc_html__( 'Button Text', 'cb-core' ),
                'type'        => \Elementor\Controls_Manager::TEXT,
                'label_block' => true,
                'condition' => [
                    'layout' => 'layout-1'
                ],
                'default'     => esc_html__( "View all", 'cb-core' ),
                'placeholder' => esc_html__( 'Button Text', 'cb-core' ),
             ]
        );
        $this->add_control(
         'btn_link',
         [
           'label'   => esc_html__( 'Button Link', 'cb-core' ),
           'type'        => \Elementor\Controls_Manager::URL,
           'default'     => [
               'url'               => '#',
               'is_external'       => true,
               'nofollow'          => true,
               'custom_attributes' => '',
            ],
            'placeholder' => esc_html__( 'Button Link', 'cb-core' ),
            'label_block' => true,
           ]
         );
         $this->add_control(
			'query_type',
			[
				'label' => __('Query type', 'cb-core'),
				'type' => Controls_Manager::SELECT,
				'default' => 'individual',
				'options' => [
					'category' => __('Category', 'cb-core'),
					'individual' => __('Individual', 'cb-core'),
				],
			]
		);
		$this->add_control(
			'cat_query',
			[
				'label' => __('Category', 'cb-core'),
				'type' => Controls_Manager::SELECT2,
				'options' => \uiexpertz_drop_cat('category', 'post'),
				'multiple' => true,
				'label_block' => true,
				'condition' => [
					'query_type' => 'category',
				],
			]
		);
		$this->add_control(
			'id_query',
			[
				'label' => __('Posts', 'cb-core'),
				'type' => Controls_Manager::SELECT2,
				'options' => \uiexpertz_drop_posts('post'),
				'multiple' => true,
				'label_block' => true,
				'condition' => [
					'query_type' => 'individual',
				],
			]
		);
		$this->add_control(
			'posts_per_page',
			[
				'label' => __('Posts Per Page', 'cb-core'),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
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

		$settings = $this->get_settings();
        $per_page = $settings['posts_per_page'];
		$cat = $settings['cat_query'];
		$id = $settings['id_query'];
		global $wp_query;
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		if ($settings['query_type'] == 'category') {
			$query_args = array(
				'post_type' => 'post',
				'posts_per_page' => $per_page,
				'hide_empty' => true,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'term_id',
						'terms' => $cat,
					),
				),
			);
		}

		if ($settings['query_type'] == 'individual') {
			$query_args = array(
				'post_type' => 'post',
				'posts_per_page' => $per_page,
				'post__in' => $id,
				'paged' => $paged,
				'orderby' => 'post__in'
			);
		}
        $wp_query = new \WP_Query($query_args);
        ?>

        <?php include dirname(__FILE__) . '/' . $settings['layout'] . '.php';
	}
}

Plugin::instance()->widgets_manager->register(new CB_Core_Blog());
