<?php

class Token_year_invoice_count extends Token
{
	private $CI;

	public function __construct()
	{
		parent::__construct();
		$this->CI =& get_instance();
		$this->CI->load->model('Sale');
	}

	public function get_value()
	{
		return $this->CI->Sale->get_invoice_number_for_year();
	}
}