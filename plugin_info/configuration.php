<?php
/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

require_once dirname(__FILE__) . '/../../../core/php/core.inc.php';
include_file('core', 'authentification', 'php');
if (!isConnect('admin')) {
	throw new Exception('{{401 - Accès non autorisé}}');
}
?>

<form class="form-horizontal" id="config">
    <div class="form-group">
        <label class="col-lg-4 control-label">{{Marque du véhicule}}</label>
        <div class="col-lg-3">
            <select class="configKey form-control" data-l1key="brandid">
                <option value="AP">{{Peugeot}}</option>
                <option value="AC">{{Citroën}}</option>
                <option value="DS">{{Citroën-DS}}</option>
                <option value="OP">{{Opel}}</option>
                <option value="VX">{{Vauxhall}}</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 control-label">{{Login compte PSA}}</label>
        <div class="col-lg-3">
            <input class="configKey form-control" data-l1key="account"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 control-label">{{Password compte PSA}}</label>
        <div class="col-lg-3">
            <input class="configKey form-control" data-l1key="password" type="password"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 control-label">{{Code PIN Appli PSA}}</label>
        <div class="col-lg-3">
            <input class="configKey form-control" data-l1key="code_pin" type="password"/>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-4 control-label">{{Code reçu par SMS}}</label>
        <div class="col-lg-3">
            <input class="configKey form-control" data-l1key="code_sms"/>
        </div>
    </div>
</form>
<?php include_file('desktop', 'peugeotcars', 'js', 'peugeotcars'); ?>