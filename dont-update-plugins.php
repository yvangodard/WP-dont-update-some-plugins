<?php
/*
  Plugin Name:  Don't update some plugins
  Description:  Désactive la mise à jour de certains plugins
  Plugin URI:   http://www.naxialis.com/comment-desactiver-la-mise-a-jour-de-vos-plugins/
  Version:      1.0
  Author:       Yvan GODARD
  Author URI:   http://www.yvangodard.me
 
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
 
function stop_plugin_update( $value ) {
	unset( $value->response['wp-help/wp-help.php'] );
	unset( $value->response['simple-ldap-login-old/Simple-LDAP-Login.php'] );
	return $value;
}

add_filter( 'site_transient_update_plugins', 'stop_plugin_update' );