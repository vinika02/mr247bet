<?php

namespace Viral_Pro_Elements\Modules\NewsModuleOne\Widgets;

// Elementor Classes
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Core\Schemes\Typography;
use Elementor\Core\Schemes\Color;
use Viral_Pro_Elements\Group_Control_Query;
use Viral_Pro_Elements\Group_Control_Header;

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

/**
 * Tiled Posts Widget
 */
class NewsModuleOne extends Widget_Base {

    /** Widget Name */
    public function get_name() {
        return 'he-news-module-one';
    }

    /** Widget Title */
    public function get_title() {
        return esc_html__('News Module 1', 'viral-pro');
    }

    /** Icon */
    public function get_icon() {
        return 'vp-news-module-one vp-elementor-icon';
    }

    /** Category */
    public function get_categories() {
        return ['viral-pro-elements'];
    }

    /** Controls */
    protected function _register_controls() {


        $this->start_controls_section(
                'header', [
            'label' => esc_html__('Header', 'viral-pro'),
                ]
        );

        $this->add_group_control(
                Group_Control_Header::get_type(), [
            'name' => 'header',
            'label' => esc_html__('Header', 'viral-pro'),
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'section_post_query', [
            'label' => esc_html__('Content Filter', 'viral-pro'),
                ]
        );

        $this->add_group_control(
                Group_Control_Query::get_type(), [
            'name' => 'posts',
            'label' => esc_html__('Posts', 'viral-pro'),
                ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
                'section_featured_block', [
            'label' => esc_html__('Featured Block', 'viral-pro'),
                ]
        );

        $this->add_group_control(
                Group_Control_Image_Size::get_type(), [
            'name' => 'featured_post_image',
            'exclude' => ['custom'],
            'include' => [],
            'default' => 'viral-pro-700x700',
                ]
        );

        $this->add_control(
                'featured_thumb_height', [
            'label' => esc_html__('Image Height(%)', 'viral-pro'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['%'],
            'range' => [
                '%' => [
                    'min' => 30,
                    'max' => 150,
                    'step' => 1
                ],
            ],
            'default' => [
                'unit' => '%',
                'size' => 100,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-fwnews-block-style1 .vl-post-item:nth-child(1) .vl-thumb-container' => 'padding-bottom: {{SIZE}}{{UNIT}}',
            ],
                ]
        );

        $this->add_control('featured_excerpt_length', [
            'label' => esc_html__('Excerpt Length', 'viral-pro'),
            'description' => esc_html__('Enter 0 to hide excerpt', 'viral-pro'),
            'type' => Controls_Manager::NUMBER,
            'min' => 0,
            'default' => 0
        ]);

        $this->add_control(
                'featured_post_author', [
            'label' => esc_html__('Show Post Author', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
            'separator' => 'before',
            'default' => 'yes'
                ]
        );

        $this->add_control(
                'featured_post_date', [
            'label' => esc_html__('Show Post Date', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->add_control(
                'featured_post_comment', [
            'label' => esc_html__('Show Post Comments', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->add_control(
                'featured_post_category', [
            'label' => esc_html__('Show Category', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'section_side_block', [
            'label' => esc_html__('Side Block', 'viral-pro'),
                ]
        );

        $this->add_group_control(
                Group_Control_Image_Size::get_type(), [
            'name' => 'side_post_image',
            'exclude' => ['custom'],
            'include' => [],
            'default' => 'viral-pro-500x500',
                ]
        );

        $this->add_control(
                'side_post_thumb_height', [
            'label' => esc_html__('Image Height(%)', 'viral-pro'),
            'type' => Controls_Manager::SLIDER,
            'size_units' => ['%'],
            'range' => [
                '%' => [
                    'min' => 30,
                    'max' => 150,
                    'step' => 1
                ],
            ],
            'default' => [
                'unit' => '%',
                'size' => 80,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-fwnews-block-style1 .vl-post-item:nth-child(2) .vl-thumb-container,
                    {{WRAPPER}} .vl-fwnews-block-style1 .vl-post-item:nth-child(3) .vl-thumb-container' => 'padding-bottom: {{SIZE}}{{UNIT}}',
            ],
                ]
        );

        $this->add_control('side_post_excerpt_length', [
            'label' => esc_html__('Excerpt Length', 'viral-pro'),
            'description' => esc_html__('Enter 0 to hide excerpt', 'viral-pro'),
            'type' => Controls_Manager::NUMBER,
            'min' => 0,
            'default' => 100
        ]);

        $this->add_control(
                'side_post_author', [
            'label' => esc_html__('Show Post Author', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
            'separator' => 'before'
                ]
        );

        $this->add_control(
                'side_post_date', [
            'label' => esc_html__('Show Post Date', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'default' => 'yes',
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'side_post_comment', [
            'label' => esc_html__('Show Post Comments', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
                ]
        );

        $this->add_control(
                'side_post_category', [
            'label' => esc_html__('Show Category', 'viral-pro'),
            'type' => Controls_Manager::SWITCHER,
            'label_on' => esc_html__('Yes', 'viral-pro'),
            'label_off' => esc_html__('No', 'viral-pro'),
            'return_value' => 'yes',
            'default' => 'yes'
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'additional_settings', [
            'label' => esc_html__('Additional Settings', 'viral-pro'),
                ]
        );

        $this->add_control(
                'date_format', [
            'label' => esc_html__('Date Format', 'viral-pro'),
            'type' => Controls_Manager::SELECT,
            'options' => [
                'relative_format' => esc_html__('Relative Format (Ago)', 'viral-pro'),
                'default' => esc_html__('WordPress Default Format', 'viral-pro'),
                'custom' => esc_html__('Custom Format', 'viral-pro'),
            ],
            'default' => 'default',
            'separator' => 'before',
            'label_block' => true
                ]
        );

        $this->add_control(
                'custom_date_format', [
            'label' => esc_html__('Custom Date Format', 'viral-pro'),
            'type' => Controls_Manager::TEXT,
            'default' => 'F j, Y',
            'placeholder' => esc_html__('F j, Y', 'viral-pro'),
            'condition' => [
                'date_format' => 'custom'
            ]
                ]
        );

        $this->add_control(
                'image_hover_style', [
            'label' => __('Image Hover Animation Style', 'viral-pro'),
            'type' => Controls_Manager::SELECT,
            'default' => 'vl-thumb-default',
            'options' => [
                'vl-thumb-default' => __('Default', 'viral-pro'),
                'vl-thumb-hover-style-no-effect' => __('No Effect', 'viral-pro'),
                'vl-thumb-hover-style-zoom-in' => __('Zoom In', 'viral-pro'),
                'vl-thumb-hover-style-zoom-out' => __('Zoom Out', 'viral-pro'),
                'vl-thumb-hover-style-slide-left' => __('Slide Left', 'viral-pro'),
                'vl-thumb-hover-style-slide-right' => __('Slide Right', 'viral-pro'),
                'vl-thumb-hover-style-slide-top' => __('Slide Top', 'viral-pro'),
                'vl-thumb-hover-style-slide-bottom' => __('Slide Bottom', 'viral-pro'),
                'vl-thumb-hover-style-rotate-zoom-in' => __('Rotate Zoom In', 'viral-pro'),
                'vl-thumb-hover-style-opacity' => __('Opacity', 'viral-pro'),
                'vl-thumb-hover-style-shine' => __('Shine', 'viral-pro'),
                'vl-thumb-hover-style-circle' => __('Circle', 'viral-pro'),
            ],
            'label_block' => true,
                ]
        );

        $this->add_control(
                'content_align', [
            'label' => __('Content Alignment', 'viral-pro'),
            'type' => Controls_Manager::SELECT,
            'default' => 'vl-align-center',
            'options' => [
                'vl-align-left' => __('Left', 'viral-pro'),
                'vl-align-center' => __('Center', 'viral-pro'),
                'vl-align-right' => __('Right', 'viral-pro'),
            ],
            'label_block' => true,
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'header_title_style', [
            'label' => esc_html__('Header Title', 'viral-pro'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'header_typography',
            'label' => esc_html__('Typography', 'viral-pro'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .vp-block-title span.vl-title, {{WRAPPER}} .vl-block-title span.vl-title',
                ]
        );

        $this->add_control(
                'header_color', [
            'label' => esc_html__('Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vp-block-title span.vl-title' => 'color: {{VALUE}}',
            ],
            'condition' => [
                'header_style' => ['vl-title-style1', 'vl-title-style2', 'vl-title-style3', 'vl-title-style4', 'vl-title-style5', 'vl-title-style6']
            ],
                ]
        );

        $this->add_control(
                'header_color_with_bg', [
            'label' => esc_html__('Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'default' => '#FFFFFF',
            'selectors' => [
                '{{WRAPPER}} .vp-block-title span.vl-title' => 'color: {{VALUE}}',
            ],
            'condition' => [
                'header_style' => ['vl-title-style7', 'vl-title-style8', 'vl-title-style9', 'vl-title-style10', 'vl-title-style11', 'vl-title-style12']
            ],
                ]
        );

        $this->add_control(
                'header_background_color', [
            'label' => esc_html__('Background Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-title-style2.vp-block-title:after, {{WRAPPER}} .vl-title-style5.vp-block-title span.vl-title:before, {{WRAPPER}} .vl-title-style7.vp-block-title span.vl-title, {{WRAPPER}} .vl-title-style8.vp-block-title span.vl-title, {{WRAPPER}} .vl-title-style9.vp-block-title span.vl-title, {{WRAPPER}} .vl-title-style9.vp-block-title span.vl-title:before, {{WRAPPER}} .vl-title-style10.vp-block-title, {{WRAPPER}} .vl-title-style11.vp-block-title, {{WRAPPER}} .vl-title-style12.vp-block-title' => 'background-color: {{VALUE}}',
                '{{WRAPPER}} .vl-title-style8.vp-block-title, {{WRAPPER}} .vl-title-style9.vp-block-title' => 'border-color: {{VALUE}}',
                '{{WRAPPER}} .vl-title-style10.vp-block-title:before' => 'border-color: {{VALUE}} {{VALUE}} transparent transparent',
            ],
            'condition' => [
                'header_style' => ['vl-title-style2', 'vl-title-style5', 'vl-title-style7', 'vl-title-style8', 'vl-title-style9', 'vl-title-style10', 'vl-title-style11', 'vl-title-style12']
            ],
                ]
        );

        $this->add_control(
                'header_border_color', [
            'label' => esc_html__('Border Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-title-style2.vp-block-title, {{WRAPPER}} .vl-title-style3.vp-block-title, {{WRAPPER}} .vl-title-style5.vp-block-title, {{WRAPPER}} .vl-title-style11.vp-block-title' => 'border-color: {{VALUE}}',
                '{{WRAPPER}} .vl-title-style4.vp-block-title:after, {{WRAPPER}} .vl-title-style6.vp-block-title:before, {{WRAPPER}} .vl-title-style6.vp-block-title:after, {{WRAPPER}} .vl-title-style7.vp-block-title:after, {{WRAPPER}} .vl-title-style11.vp-block-title span.vl-title' => 'background-color: {{VALUE}}',
            ],
            'condition' => [
                'header_style' => ['vl-title-style2', 'vl-title-style3', 'vl-title-style4', 'vl-title-style5', 'vl-title-style6', 'vl-title-style7', 'vl-title-style11']
            ],
                ]
        );

        $this->add_control(
            'header_title_margin', [
                'label' => esc_html__('Margin', 'viral-pro'),
                'type' => Controls_Manager::DIMENSIONS,
                'allowed_dimensions' => 'vertical',
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .vl-block-title, {{WRAPPER}} .vp-block-title' => 'margin: {{TOP}}{{UNIT}} 0 {{BOTTOM}}{{UNIT}} 0;',
                ],
                'default' => [
                            'top' => '0',
                            'right' => '',
                            'bottom' => '30',
                            'left' => '',
                            'isLinked' => false,
                            ]
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'category_style', [
            'label' => esc_html__('Category', 'viral-pro'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'category_normal_typography',
            'label' => esc_html__('Typography', 'viral-pro'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .vl-primary-cat-block .vl-primary-cat, {{WRAPPER}} .vl-post-categories li a.vl-category'
                ]
        );

        $this->start_controls_tabs(
                'category_style_tabs'
        );

        $this->start_controls_tab(
                'category_normal_tab', [
            'label' => __('Normal', 'viral-pro'),
                ]
        );

        $this->add_control(
                'category_background_color', [
            'label' => esc_html__('Background Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-primary-cat-block .vl-primary-cat,
                {{WRAPPER}} .vl-post-categories li a.vl-category' => 'background-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'category_text_color', [
            'label' => esc_html__('Text Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-primary-cat-block .vl-primary-cat,
                {{WRAPPER}} .vl-post-categories li a.vl-category' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
                'category_hover_tab', [
            'label' => __('Hover', 'viral-pro'),
                ]
        );

        $this->add_control(
                'category_background_hover_color', [
            'label' => esc_html__('Background Color (Hover)', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-primary-cat-block .vl-primary-cat:hover,
                {{WRAPPER}} .vl-post-categories li a.vl-category:hover' => 'background-color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'category_text_hover_color', [
            'label' => esc_html__('Text Color (Hover)', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-primary-cat-block .vl-primary-cat:hover,
                {{WRAPPER}} .vl-post-categories li a.vl-category:hover' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
                'post_title_style', [
            'label' => esc_html__('Title', 'viral-pro'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'title_color', [
            'label' => esc_html__('Title Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} h3.vl-post-title' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_control(
                'title_hover_color', [
            'label' => esc_html__('Title Color (Hover)', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} h3.vl-post-title:hover' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->start_controls_tabs(
                'title_style_tabs'
        );

        $this->start_controls_tab(
                'featured_title_tab', [
            'label' => __('Featured Post', 'viral-pro'),
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'featured_title_typography',
            'label' => esc_html__('Typography', 'viral-pro'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .vl-post-item:nth-child(1) h3.vl-post-title a'
                ]
        );

        $this->add_control(
                'featured_title_margin', [
            'label' => esc_html__('Margin', 'viral-pro'),
            'type' => Controls_Manager::DIMENSIONS,
            'allowed_dimensions' => 'vertical',
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .vl-post-item:nth-child(1) h3.vl-post-title' => 'margin: {{TOP}}{{UNIT}} 0 {{BOTTOM}}{{UNIT}} 0;',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
                'side_title_tab', [
            'label' => __('Side Post', 'viral-pro'),
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'side_post_title_typography',
            'label' => esc_html__('Typography', 'viral-pro'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .vl-post-item:nth-child(2) h3.vl-post-title a, 
                                       {{WRAPPER}} .vl-post-item:nth-child(3) h3.vl-post-title a',
                ]
        );

        $this->add_control(
                'side_post_title_margin', [
            'label' => esc_html__('Margin', 'viral-pro'),
            'type' => Controls_Manager::DIMENSIONS,
            'allowed_dimensions' => 'vertical',
            'size_units' => ['px', '%', 'em'],
            'selectors' => [
                '{{WRAPPER}} .vl-post-item:nth-child(2) h3.vl-post-title, 
                             {{WRAPPER}} .vl-post-item:nth-child(3) h3.vl-post-title' => 'margin: {{TOP}}{{UNIT}} 0 {{BOTTOM}}{{UNIT}} 0;',
            ],
                ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();


        $this->start_controls_section(
                'excerpt_style', [
            'label' => esc_html__('Excerpt', 'viral-pro'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'excerpt_color', [
            'label' => esc_html__('Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-post-item .vl-post-content .vl-excerpt' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'excerpt_typography',
            'label' => esc_html__('Typography', 'viral-pro'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .vl-post-item .vl-post-content .vl-excerpt',
                ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
                'post_metas', [
            'label' => esc_html__('Metas', 'viral-pro'),
            'tab' => Controls_Manager::TAB_STYLE,
                ]
        );

        $this->add_control(
                'post_metas_color', [
            'label' => esc_html__('Color', 'viral-pro'),
            'type' => Controls_Manager::COLOR,
            'scheme' => [
                'type' => Color::get_type(),
                'value' => Color::COLOR_1,
            ],
            'selectors' => [
                '{{WRAPPER}} .vl-post-item .vl-post-content .vl-post-metas' => 'color: {{VALUE}}',
            ],
                ]
        );

        $this->add_group_control(
                Group_Control_Typography::get_type(), [
            'name' => 'post_metas_typography',
            'label' => esc_html__('Typography', 'viral-pro'),
            'scheme' => Typography::TYPOGRAPHY_1,
            'selector' => '{{WRAPPER}} .vl-post-item .vl-post-content .vl-post-metas'
                ]
        );

        $this->end_controls_section();
    }

    /** Render Layout */
    protected function render() {
        $settings = $this->get_settings_for_display();

        $featured_post_image_size = $settings['featured_post_image_size'];
        $side_post_image_size = $settings['side_post_image_size'];
        $content_align_class = $settings['content_align'];
        ?>
        <div class="vl-fwnews-block <?php echo esc_attr($settings['image_hover_style']); ?>">
            <?php $this->render_header(); ?>

            <div class="vl-fwnews-block-style1">
                <?php
                $args = $this->query_args();
                $query = new \WP_Query($args);
                while ($query->have_posts()): $query->the_post();
                    $index = $query->current_post + 1;
                    $title_class = $index == 1 ? 'vl-large-title' : 'vl-big-title';
                    ?>
                    <div class="vl-post-item">
                        <div class="vl-post-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <div class="vl-thumb-container">
                                    <?php
                                    $image_size = ($index == 1) ? $featured_post_image_size : $side_post_image_size;
                                    viral_pro_elements_featured_image($image_size);
                                    ?>
                                </div>
                            </a>
                            <?php
                            if ($index == 1) {
                                if ($settings['featured_post_category'] == 'yes')
                                    viral_pro_elements_get_category_list();
                            } else {
                                if ($settings['side_post_category'] == 'yes')
                                    viral_pro_elements_primary_category();
                            }
                            ?>
                        </div>

                        <div class="vl-post-content <?php echo esc_attr($content_align_class); ?>">
                            <h3 class="vl-post-title <?php echo esc_attr($title_class) ?>"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                            <?php $this->get_post_meta($index); ?>

                            <?php $this->get_post_excerpt($index); ?>

                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <?php
    }

    /** Render Header */
    protected function render_header() {
        $settings = $this->get_settings();
        $class = $settings['header_style'] == 'vl-title-default' ? 'vl-block-title' : 'vp-block-title';
        $this->add_render_attribute('header_attr', 'class', [
            esc_attr($class),
            esc_attr($settings['header_style'])
                ]
        );

        $link_open = $link_close = "";
        $target = $settings['header_link']['is_external'] ? ' target="_blank"' : '';
        $nofollow = $settings['header_link']['nofollow'] ? ' rel="nofollow"' : '';

        if ($settings['header_link']['url']) {
            $link_open = '<a href="' . $settings['header_link']['url'] . '"' . $target . $nofollow . '>';
            $link_close = '</a>';
        }

        if ($settings['header_title']) {
            ?>
            <h2 <?php echo $this->get_render_attribute_string('header_attr'); ?>>
                <?php
                echo $link_open;
                echo '<span class="vl-title">';
                echo $settings['header_title'];
                echo '</span>';
                echo $link_close;
                ?>
            </h2>
            <?php
        }
    }

    /** Query Args */
    protected function query_args() {
        $settings = $this->get_settings();

        $post_type = $args['post_type'] = $settings['posts_post_type'];
        $args['orderby'] = $settings['posts_orderby'];
        $args['order'] = $settings['posts_order'];
        $args['ignore_sticky_posts'] = 1;
        $args['post_status'] = 'publish';
        $args['offset'] = $settings['posts_offset'];
        $args['posts_per_page'] = 3;
        $args['post__not_in'] = $post_type == 'post' ? $settings['posts_exclude_posts'] : [];

        $args['tax_query'] = [];

        $taxonomies = get_object_taxonomies($post_type, 'objects');

        foreach ($taxonomies as $object) {
            $setting_key = 'posts_' . $object->name . '_ids';

            if (!empty($settings[$setting_key])) {
                $args['tax_query'][] = [
                    'taxonomy' => $object->name,
                    'field' => 'term_id',
                    'terms' => $settings[$setting_key],
                ];
            }
        }

        return $args;
    }

    /** Get Post Excerpt */
    protected function get_post_excerpt($count) {
        $settings = $this->get_settings_for_display();
        $excerpt_length = $count == 1 ? $settings['featured_excerpt_length'] : $settings['side_post_excerpt_length'];
        if ($excerpt_length) {
            ?>
            <div class="vl-excerpt"><?php echo viral_pro_elements_custom_excerpt($excerpt_length); ?></div>
            <?php
        }
    }

    /** Get Post Metas */
    protected function get_post_meta($count) {
        $settings = $this->get_settings_for_display();
        $post_author = $count == 1 ? $settings['featured_post_author'] : $settings['side_post_author'];
        $post_date = $count == 1 ? $settings['featured_post_date'] : $settings['side_post_date'];
        $post_comment = $count == 1 ? $settings['featured_post_comment'] : $settings['side_post_comment'];

        if ($post_author == 'yes' || $post_date == 'yes' || $post_comment == 'yes') {
            ?>
            <div class="vl-post-metas">
                <?php
                if ($post_author == 'yes') {
                    viral_pro_elements_author_name();
                }

                if ($post_date == 'yes') {
                    $date_format = $settings['date_format'];

                    if ($date_format == 'relative_format') {
                        viral_pro_elements_time_ago();
                    } else if ($date_format == 'default') {
                        viral_pro_elements_post_date();
                    } else if ($date_format == 'custom') {
                        $format = $settings['custom_date_format'];
                        viral_pro_elements_post_date($format);
                    }
                }

                if ($post_comment == 'yes') {
                    viral_pro_elements_comment_count();
                }
                ?>
            </div>
            <?php
        }
    }

}
