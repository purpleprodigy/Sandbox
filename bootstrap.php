<?php
/**
 * Sandbox Playing Plugin
 *
 * @package     PurpleProdigy\Sandbox;
 * @author      Purple Prodigy
 * @licence     GPL-2.0+
 * @link        https://purpleprodigy.com
 */
/*
 * @wordpress-plugin
 * Plugin Name:     Sandbox Playing Plugin
 * Plugin URI:      https://github.com/purpleprodigy/Sandbox
 * Description:     Sandbox is a WordPress Plugin to play and test things out.
 * Version:         1.0.0
 * Author:          Purple Prodigy
 * Author URI:      https://purpleprodigy.com
 * Text Domain:     sandbox
 * Requires WP:     4.7
 * Requires PHP:    5.5
 */
/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace PurpleProdigy\Sandbox;

$first_name = 'Rose';
$post_id = 12;

d( "My name is $first_name." );

d( "The post ID is $post_id" );

die();