<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Folder Select Field Type
 *
 * @package		Addons\Field Types
 * @author		James Doyle (james2doyle)
 * @license		MIT License
 * @link		http://github.com/james2doyle/pyro-post-select
 */
class Field_post_select
{
	public $field_type_slug    = 'post_select';
	public $db_col_type        = 'int';
	public $version            = '1.0.1';
	public $author             = array('name'=>'James Doyle', 'url'=>'http://github.com/james2doyle/pyro-post-select');

	// --------------------------------------------------------------------------

	public function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->model('blog/blog_m');
	}

	/**
	 * Output form input
	 *
	 * @param	array
	 * @param	array
	 * @return	string
	 */
	public function form_output($data, $entry_id, $field)
	{
		$values = array_for_select($this->CI->blog_m->get_all(), 'id', 'title');
		$dropdown = form_dropdown($data['form_slug'], array('-1' => 'None') + $values, $data['value']);
		return sprintf("<div id=\"%s_post_select\" class=\"post_select\">%s</div>", $data['form_slug'], $dropdown);
	}

	public function pre_output_plugin($value, $data)
	{
		$post = $this->CI->blog_m->get($value);
		if ($post) {
			// Full URL for convenience.
			$post->url = site_url('blog/'.date('Y/m', $post->created_on).'/'.$post->slug);
			return $post;
		} else {
			return false;
		}
	}

	public function event($field)
	{
		// add js and css folders if you need this
		// $this->CI->type->add_js('post_select', 'post_select.js');
		// $this->CI->type->add_css('post_select', 'post_select.css');
	}
}
