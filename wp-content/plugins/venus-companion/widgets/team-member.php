<?php
namespace VenusCompanion\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Elementor Hello World
 *
 * Elementor widget for hello world.
 *
 * @since 1.0.0
 */
class Team_Member extends Widget_Base {

	/**
	 * Retrieve the widget name.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'team-member';
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
	public function get_title() {
		return __( 'Team Member', 'venus-companion' );
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
	public function get_icon() {
		return ' eicon-preferences';
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
	public function get_categories() {
		return [ 'general' ];
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
	// public function get_script_depends() {
	// 	return [ 'venus-companion' ];
	// }

	/**
	 * Register the widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => __( 'Content', 'venus-companion' ),
			]
		);

		$this->add_control(
			'photo',
			[
				'label' => __( 'Photo', 'venus-companion' ),
				'type' => Controls_Manager::MEDIA,
			]
		);

		$this->add_control(
			'name',
			[
				'label' => __( 'name', 'venus-companion' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'designation',
			[
				'label' => __( 'Designation', 'venus-companion' ),
				'type' => Controls_Manager::TEXTAREA,
			]
		);

		$this->add_control(
			'facebook',
			[
				'label' => __( 'Facebook', 'venus-companion' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'twitter',
			[
				'label' => __( 'Twitter', 'venus-companion' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->add_control(
			'linkedin',
			[
				'label' => __( 'Linkedin', 'venus-companion' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => __( 'Style', 'venus-companion' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'overlay',
			[
				'label' => __( 'Overlay Color', 'venus-companion' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-hover .team-info' => 'background: {{VALUE}};',
				],
			]
		);

		$this->end_controls_section();
	}

	/**
	 * Render the widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		?>
		<div class="team-hover card border-0 mb-4">
			<img class="card-img rounded" src="<?php echo esc_html($settings['photo']['url']); ?>" alt="">
			<div class="team-info">
				<div class="team-title">
					<h6><?php echo esc_html($settings['name']); ?> </h6>
					<p><?php echo esc_html($settings['designation']); ?></p>
				</div>
				<div class="team-social-links">
					<a href="<?php echo esc_html($settings['facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
					<a href="<?php echo esc_html($settings['twitter']); ?>"><i class="fab fa-twitter"></i></a>
					<a href="<?php echo esc_html($settings['linkedin']); ?>"><i class="fab fa-google-plus-g"></i></a>
				</div>
			</div>
		</div>
		<?php 
	}

	/**
	 * Render the widget output in the editor.
	 *
	 * Written as a Backbone JavaScript template and used to generate the live preview.
	 *
	 * @since 1.0.0
	 *
	 * @access protected
	 */
	protected function _content_template_() {
		?>
		<div class="title">
			{{{ settings.title }}}
		</div>
		<?php
	}
}
