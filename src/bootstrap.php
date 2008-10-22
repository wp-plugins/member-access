<?php
/**
 * Plugin Name: @plugin_name@
 * Plugin URI:  @plugin_uri@
 * Description: @plugin_description@
 * Version:     @plugin_version@
 * Author:      @author_name@
 * Author URI:  @author_uri@
 * 
 * Copyright 2008 @author_name@
 *
 * This file is part of @plugin_name@.
 * 
 * @plugin_name@ is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * @plugin_name@ is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with @plugin_name@.  If not, see <http://www.gnu.org/licenses/>.
 * 
 */

// Include all class files up-front so that we don't have to worry about the
// include path or any globals containing the plugin base path.

require_once 'lib/MyPlugin/Structure.php';
require_once 'lib/MyPlugin/Structure/Options.php';
require_once 'lib/MyPlugin/Structure/View.php';
require_once 'lib/MyPlugin.php';

// Run the plugin.
MyPlugin::run(__FILE__);

/* EOF */