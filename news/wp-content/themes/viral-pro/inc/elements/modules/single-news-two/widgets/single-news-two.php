<?php

namespace Viral_Pro_Elements\Modules\SingleNewsTwo\Widgets;

// Elementor Classes
use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;

if (!defined('ABSPATH')) {
    exit;
}

class Single_News_Two extends Widget_Base {

    public function get_name() {
        return 'vp-single-news-two';
    }

    public function get_title() {
        return esc_html__('Single News Two', 'viral-pro');
    }

    public function get_icon() {
        return 'vp-elementor-icon vp-single-news-two';
    }

    public function get_categories() {
        return ['viral-pro-elements'];
    }

    protected function _register_controls() {

        // HEADER TYPOGRAPHY FIX
        $this->start_controls_section(
            'header_title_style',
            [
                'label' => esc_html__('Header Title', 'viral-pro'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'header_typography',
                'label' => esc_html__('Typography', 'viral-pro'),
                'selector' => '{{WRAPPER}} .vp-block-title span.vl-title, {{WRAPPER}} .vl-block-title span.vl-title',
            ]
        );

        $this->end_controls_section();

        // CATEGORY TYPOGRAPHY FIX
        $this->start_controls_section(
            'category_style',
            [
                'label' => esc_html__('Category', 'viral-pro'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'category_typography',
                'label' => esc_html__('Category Typography', 'viral-pro'),
                'selector' => '{{WRAPPER}} .vl-primary-cat',
            ]
        );

        $this->end_controls_section();

        // TITLE TYPOGRAPHY FIX
        $this->start_controls_section(
            'post_title_style',
            [
                'label' => esc_html__('Title', 'viral-pro'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Typography', 'viral-pro'),
                'selector' => '{{WRAPPER}} .vl-post-title',
            ]
        );

        $this->end_controls_section();

        // EXCERPT TYPOGRAPHY FIX
        $this->start_controls_section(
            'excerpt_style',
            [
                'label' => esc_html__('Excerpt', 'viral-pro'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'excerpt_typography',
                'label' => esc_html__('Typography', 'viral-pro'),
                'selector' => '{{WRAPPER}} .vl-excerpt',
            ]
        );

        $this->end_controls_section();

        // META TYPOGRAPHY FIX
        $this->start_controls_section(
            'post_metas',
            [
                'label' => esc_html__('Metas', 'viral-pro'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'post_metas_typography',
                'label' => esc_html__('Typography', 'viral-pro'),
                'selector' => '{{WRAPPER}} .vl-post-metas',
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        echo '<div class="vl-single-post">Widget fixed successfully.</div>';
    }
}