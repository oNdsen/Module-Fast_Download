<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2016 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('create_alias', "Álnév és mappa létrehozása");
define('save_as', "Mentés mint");
define('failure', "Error, failed to generate the alias file");
define('success', "Sikeres");
define('fast_download_service_for', "Downloads redirection service for %s");
define('to_the_path', "To the path");
define('at_url', "URL címen");
define('create_alias_for', "Create alias for");
define('fast_dl', "Átirányított letöltések (FastDL)");
define('current_aliases_at_remote_server', "Current aliases at remote server");
define('delete_selected_aliases', "A kiválasztott álnevek törlése");
define('no_aliases_defined', "There are no web aliases defined by OGP for this remote server yet.");
define('fastdl_port', "Port");
define('fastdl_port_info', "Port on which your Fast Download server will start.");
define('fastdl_ip', "Cím");
define('fastdl_ip_info', "The IP address or domain in which your Fast Download server will start, the domain must to be listed at /etc/hosts.");
define('listing', "Felsorolás");
define('listing_info', "If 'on', the server will list the contents of folders.");
define('fast_dl_advanced', "További beállítások");
define('apply_settings_and_restart_fastdl', "Save the daemon configuration and restart it");
define('stop_fastdl', "Stop Fast Download Daemon.");
define('fast_download_daemon_running', "Fast Download Daemon is running.");
define('fast_download_daemon_not_running', "Fast Download Daemon is not running.");
define('fastdl_could_not_be_restarted', "The Fast Download service could not be restarted.");
define('configuration_file_could_not_be_written', "The configuration file could not be written.");
define('remove_folders', "Remove folder for selected aliases.");
define('remove_folder', "Könyvtár eltávolítása");
define('delete_alias', "Álvév törlése");
define('no_game_homes_assigned', "No game servers assigned for you. You need to ask your OGP admin to assign games for you.");
define('select_remote_server', "Válassz távoli szervert");
define('access_rules', "Hozzáférési szabályok");
define('create_aliases', "Álnév létrehozása");
define('select_game', "Válassz játékot");
define('games_without_specified_rules', "Játékok speciális szabályok nélkül.");
define('match_file_extension', "Fájl kiterjesztés egyezés");
define('match_file_extension_info', "Specify extensions separated by coma,<br> the matching files will be accessible.<br><b>Blank for unrestricted access</b>.");
define('match_client_ip', "Match client IP");
define('match_client_ip_info', "Connections with matching IP will be granted,<br>blank for unrestricted access. You can use<br>multiple IPs or ranges separated by coma:<br>/xx subnets<br>Example: 10.0.0.0/16<br>/xxx.xxx.xxx.xxx subnets<br>Example: 10.0.0.0/255.0.0.0<br>Hyphen ranges<br>Example: 10.0.0.5-230<br>Asterisk matching<br>Example: 10.0.*.*");
define('save_access_rules', "Hozzáférési szabályok mentése");
define('create_access_rules', "Hozzáférési szabályok létrehozása");
define('invalid_entries_found', "Invalid entries found");
define('game_name', "Játék neve");
define('alias_already_exists', "%s álnév már létezik.");
define('warning_access_rules_applied_once_alias_created', "WARNING: Access rules are applied when the alias is created. No changes will be applied to the current aliases.");
define('autostart_on_agent_startup', "Autostart on agent startup");
define('autostart_on_agent_startup_info', "Start the fast download daemon automatically when the agent starts.");
define('port_forwarded_to_80', "Port továbbítása 80-ról");
define('port_forwarded_to_80_info', "Enable this option if the port configured for this fast download daemon has been forwarded from port 80, so the port will be hidden at URLs.");
?>