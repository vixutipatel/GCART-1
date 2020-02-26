<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Gets the vendor url.
 *
 * @param  string  $url  The url
 *
 * @return string  The vendor url.
 */
function vendor_url($url = '')
{
	$vendorURI = get_vendor_uri();

	if ($url == '' || $url == '/')
	{
		if ($url == '/')
		{
			$url = '';
		}

		return site_url($vendorURI).'/';
	}

	return site_url($vendorURI.'/'.$url);
}

/**
 * Gets the vendor uri.
 *
 * @return string  The vendor uri.
 */
function get_vendor_uri()
{
	return VENDOR_URI;
}
