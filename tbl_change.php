<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es" dir="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" href="./favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
    <title>phpMyAdmin</title>
    <link rel="stylesheet" type="text/css" href="phpmyadmin.css.php?token=d57261dfd9273c4c8d0496e5fe050a27&amp;js_frame=right&amp;nocache=3830415417" />
    <link rel="stylesheet" type="text/css" href="print.css" media="print" />
    <meta name="robots" content="noindex,nofollow" />
<script type="text/javascript">
//<![CDATA[
try {
    // can't access this if on a different domain
    var topdomain = top.document.domain;
    // double-check just for sure
    if (topdomain != self.document.domain) {
        alert("Redirecting...");
        top.location.replace(self.document.URL.substring(0, self.document.URL.lastIndexOf("/")+1));
    }
}
catch(e) {
    alert("Redirecting... (error: " + e);
    top.location.replace(self.document.URL.substring(0, self.document.URL.lastIndexOf("/")+1));
}
//]]>
</script>
<script src="./js/tbl_change.js" type="text/javascript"></script>
<script src="./js/tooltip.js" type="text/javascript"></script>
<script type="text/javascript">
// <![CDATA[
// Updates the title of the frameset if possible (ns4 does not allow this)
if (typeof(parent.document) != 'undefined' && typeof(parent.document) != 'unknown'
    && typeof(parent.document.title) == 'string') {
    parent.document.title = 'localhost / localhost / cvdb / aficiones | phpMyAdmin 3.3.10deb1';
}

var PMA_messages = new Array();
window.parent.addEvent(window, 'load', PMA_TT_init);
// ]]>
</script>
    <meta name="OBGZip" content="true" />
        <!--[if IE 6]>
    <style type="text/css">
    /* <![CDATA[ */
    html {
        overflow-y: scroll;
    }
    /* ]]> */
    </style>
    <![endif]-->
</head>

<body>
    <div id="serverinfo">
<a href="main.php?token=d57261dfd9273c4c8d0496e5fe050a27" class="item">        <img class="icon" src="./themes/darkblue_orange/img/s_host.png" width="16" height="16" alt="" /> 
localhost</a>
        <span class="separator"><img class="icon" src="./themes/darkblue_orange/img/item_ltr.png" width="5" height="9" alt="-" /></span>
<a href="db_structure.php?db=cvdb&amp;token=d57261dfd9273c4c8d0496e5fe050a27" class="item">        <img class="icon" src="./themes/darkblue_orange/img/s_db.png" width="16" height="16" alt="" /> 
cvdb</a>
        <span class="separator"><img class="icon" src="./themes/darkblue_orange/img/item_ltr.png" width="5" height="9" alt="-" /></span>
<a href="sql.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" class="item">        <img class="icon" src="./themes/darkblue_orange/img/s_tbl.png" width="16" height="16" alt="" /> 
aficiones</a>
</div><div id="topmenucontainer">
<ul id="topmenu">
<li><a class="tab" href="sql.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27&amp;pos=0" ><img class="icon" src="./themes/darkblue_orange/img/b_browse.png" width="16" height="16" alt="" />Examinar</a></li>
<li><a class="tab" href="tbl_structure.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/b_props.png" width="16" height="16" alt="" />Estructura</a></li>
<li><a class="tab" href="tbl_sql.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/b_sql.png" width="16" height="16" alt="" />SQL</a></li>
<li><a class="tab" href="tbl_select.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/b_search.png" width="16" height="16" alt="" />Buscar</a></li>
<li><a class="tab" href="tbl_tracking.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/eye.png" width="16" height="16" alt="" />Tracking</a></li>
<li class="active"><a class="tabactive" href="tbl_change.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/b_insrow.png" width="16" height="16" alt="" />Insertar</a></li>
<li><a class="tab" href="tbl_export.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27&amp;single_table=true" ><img class="icon" src="./themes/darkblue_orange/img/b_tblexport.png" width="16" height="16" alt="" />Exportar</a></li>
<li><a class="tab" href="tbl_import.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/b_tblimport.png" width="16" height="16" alt="" />Importar</a></li>
<li><a class="tab" href="tbl_operations.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27" ><img class="icon" src="./themes/darkblue_orange/img/b_tblops.png" width="16" height="16" alt="" />Operaciones</a></li>
<li><a class="tabcaution" href="sql.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27&amp;reload=1&amp;sql_query=TRUNCATE+TABLE+%60aficiones%60&amp;zero_rows=Se+ha+vaciado+la+tabla+aficiones&amp;goto=tbl_structure.php" onclick="return confirmLink(this, 'TRUNCATE TABLE `aficiones`')"><img class="icon" src="./themes/darkblue_orange/img/b_empty.png" width="16" height="16" alt="" />Vaciar</a></li>
<li><a class="tabcaution" href="sql.php?db=cvdb&amp;table=aficiones&amp;token=d57261dfd9273c4c8d0496e5fe050a27&amp;reload=1&amp;purge=1&amp;sql_query=DROP+TABLE+%60aficiones%60&amp;goto=db_structure.php&amp;zero_rows=Se+ha+eliminado+la+tabla+aficiones" onclick="return confirmLink(this, 'DROP TABLE `aficiones`')"><img class="icon" src="./themes/darkblue_orange/img/b_deltbl.png" width="16" height="16" alt="" />Eliminar</a></li>
</ul>
<div class="clearfloat"></div></div>
<!-- Set on key handler for moving using by Ctrl+arrows -->
<script src="./js/keyhandler.js" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
var switch_movement = 0;
document.onkeydown = onKeyDownArrowsHandler;
//]]>
</script>
    <!-- Insert/Edit form -->
<form method="post" action="tbl_replace.php" name="insertForm"  enctype="multipart/form-data">
<input type="hidden" name="db" value="cvdb" /><input type="hidden" name="table" value="aficiones" /><input type="hidden" name="goto" value="sql.php" /><input type="hidden" name="err_url" value="sql.php?db=cvdb&amp;amp;table=aficiones&amp;amp;token=d57261dfd9273c4c8d0496e5fe050a27" /><input type="hidden" name="sql_query" value="SELECT * FROM `aficiones`" /><input type="hidden" name="where_clause[0]" value="`aficiones`.`aficion` = 'Bike' AND `aficiones`.`usuario_dni` = 1" /><input type="hidden" name="clause_is_unique" value="1" /><input type="hidden" name="token" value="d57261dfd9273c4c8d0496e5fe050a27" />    <table>
    <thead>
        <tr>
            <th>Campo</th>
            <th>Tipo</th>
          <th><a href="tbl_change.php?db=cvdb&amp;table=aficiones&amp;where_clause=%60aficiones%60.%60aficion%60+%3D+%27Bike%27+AND+%60aficiones%60.%60usuario_dni%60+%3D+1&amp;sql_query=SELECT+%2A+FROM+%60aficiones%60&amp;ShowFunctionFields=0&amp;goto=sql.php&amp;token=d57261dfd9273c4c8d0496e5fe050a27" title="Ocultar">Función</a></th>
            <th>Nulo</th>
            <th>Valor</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th colspan="5" align="right" class="tblFooters">
                <input type="submit" value="Continuar" />
            </th>
        </tr>
    </tfoot>
    <tbody>
        <tr class="odd">
            <td  align="center">
                aficion                <input type="hidden" name="fields_name[multi_edit][0][fa67f837d88b1985e8e79e893fb694c1]" value="aficion"/>
            </td>
            <td align="center" nowrap="nowrap">
                varchar(50)            </td>

                    <td>
                <select name="funcs[multi_edit][0][fa67f837d88b1985e8e79e893fb694c1]" onchange="return unNullify('fa67f837d88b1985e8e79e893fb694c1', '0')" tabindex="3001" id="field_1_1">
                    <option></option>
                <option>BIN</option>
<option>CHAR</option>
<option>CURRENT_USER</option>
<option>COMPRESS</option>
<option>DAYNAME</option>
<option>DES_DECRYPT</option>
<option>DES_ENCRYPT</option>
<option>ENCRYPT</option>
<option>HEX</option>
<option>INET_NTOA</option>
<option>LOWER</option>
<option>MD5</option>
<option>OLD_PASSWORD</option>
<option>PASSWORD</option>
<option>REVERSE</option>
<option>SHA1</option>
<option>SOUNDEX</option>
<option>SPACE</option>
<option>UNCOMPRESS</option>
<option>UNHEX</option>
<option>UPPER</option>
<option>USER</option>
<option>UUID</option>
                <option value="">--------</option>
                <option>ABS</option>
                <option>ACOS</option>
                <option>ASCII</option>
                <option>ASIN</option>
                <option>ATAN</option>
                <option>BIT_COUNT</option>
                <option>BIT_LENGTH</option>
                <option>CEILING</option>
                <option>CHAR_LENGTH</option>
                <option>COS</option>
                <option>COT</option>
                <option>CRC32</option>
                <option>CURDATE</option>
                <option>CURTIME</option>
                <option>DATE</option>
                <option>DEGREES</option>
                <option>EXP</option>
                <option>FLOOR</option>
                <option>FROM_DAYS</option>
                <option>FROM_UNIXTIME</option>
                <option>INET_ATON</option>
                <option>LENGTH</option>
                <option>LN</option>
                <option>LOG</option>
                <option>LOG10</option>
                <option>LOG2</option>
                <option>NOW</option>
                <option>OCT</option>
                <option>ORD</option>
                <option>RADIANS</option>
                <option>RAND</option>
                <option>ROUND</option>
                <option>SEC_TO_TIME</option>
                <option>SQRT</option>
                <option>STDDEV_POP</option>
                <option>STDDEV_SAMP</option>
                <option>TAN</option>
                <option>TIMESTAMP</option>
                <option>TIME_TO_SEC</option>
                <option>UNIX_TIMESTAMP</option>
                <option>UTC_DATE</option>
                <option>UTC_TIME</option>
                <option>UTC_TIMESTAMP</option>
                <option>VAR_POP</option>
                <option>VAR_SAMP</option>
                <option>YEAR</option>
                </select>
            </td>
                        <td>
        </td>
        <td>
<input type="hidden" name="fields_prev[multi_edit][0][fa67f837d88b1985e8e79e893fb694c1]" value="Bike" />
                <input type="text" name="fields[multi_edit][0][fa67f837d88b1985e8e79e893fb694c1]"
                    value="Bike" size="40"
                    class="textfield" onchange="return unNullify('fa67f837d88b1985e8e79e893fb694c1', '0')"                    tabindex="1"
                    id="field_1_3" />
                            </td>
        </tr>
                <tr class="even">
            <td  align="center">
                usuario_dni                <input type="hidden" name="fields_name[multi_edit][0][803cfb047d5cfa9fdc7fc9ab456547a3]" value="usuario_dni"/>
            </td>
            <td align="center" nowrap="nowrap">
                int(11)            </td>

                    <td>
                <select name="funcs[multi_edit][0][803cfb047d5cfa9fdc7fc9ab456547a3]" onchange="return unNullify('803cfb047d5cfa9fdc7fc9ab456547a3', '0')" tabindex="3004" id="field_2_1">
                    <option></option>
                <option>ABS</option>
<option>ACOS</option>
<option>ASCII</option>
<option>ASIN</option>
<option>ATAN</option>
<option>BIT_LENGTH</option>
<option>BIT_COUNT</option>
<option>CEILING</option>
<option>CHAR_LENGTH</option>
<option>COS</option>
<option>COT</option>
<option>CRC32</option>
<option>DEGREES</option>
<option>EXP</option>
<option>FLOOR</option>
<option>INET_ATON</option>
<option>LENGTH</option>
<option>LN</option>
<option>LOG</option>
<option>LOG2</option>
<option>LOG10</option>
<option>OCT</option>
<option>ORD</option>
<option>RADIANS</option>
<option>RAND</option>
<option>ROUND</option>
<option>SQRT</option>
<option>STDDEV_POP</option>
<option>STDDEV_SAMP</option>
<option>TAN</option>
<option>TIME_TO_SEC</option>
<option>UNIX_TIMESTAMP</option>
<option>VAR_POP</option>
<option>VAR_SAMP</option>
                <option value="">--------</option>
                <option>BIN</option>
                <option>CHAR</option>
                <option>COMPRESS</option>
                <option>CURDATE</option>
                <option>CURRENT_USER</option>
                <option>CURTIME</option>
                <option>DATE</option>
                <option>DAYNAME</option>
                <option>DES_DECRYPT</option>
                <option>DES_ENCRYPT</option>
                <option>ENCRYPT</option>
                <option>FROM_DAYS</option>
                <option>FROM_UNIXTIME</option>
                <option>HEX</option>
                <option>INET_NTOA</option>
                <option>LOWER</option>
                <option>MD5</option>
                <option>NOW</option>
                <option>OLD_PASSWORD</option>
                <option>PASSWORD</option>
                <option>REVERSE</option>
                <option>SEC_TO_TIME</option>
                <option>SHA1</option>
                <option>SOUNDEX</option>
                <option>SPACE</option>
                <option>TIMESTAMP</option>
                <option>UNCOMPRESS</option>
                <option>UNHEX</option>
                <option>UPPER</option>
                <option>USER</option>
                <option>UTC_DATE</option>
                <option>UTC_TIME</option>
                <option>UTC_TIMESTAMP</option>
                <option>UUID</option>
                <option>YEAR</option>
                </select>
            </td>
                        <td>
        </td>
        <td>
<input type="hidden" name="fields_prev[multi_edit][0][803cfb047d5cfa9fdc7fc9ab456547a3]" value="1" />
            <input type="hidden" name="fields_type[multi_edit][0][803cfb047d5cfa9fdc7fc9ab456547a3]"
                value="foreign" />
            <input type="hidden" name="fields[multi_edit][0][803cfb047d5cfa9fdc7fc9ab456547a3]"
                value="" id="field_2_3A" />
            <select name="field_803cfb047d5cfa9fdc7fc9ab456547a3[multi_edit][0][]"
                onchange="return unNullify('803cfb047d5cfa9fdc7fc9ab456547a3', '0')"                tabindex="4"
                id="field_2_3">
                <option value="">&nbsp;</option>
                <option value="566555">&nbsp;-&nbsp;566555</option>
                <option value="5665553">&nbsp;-&nbsp;5665553</option>
                <option value="56655532">&nbsp;-&nbsp;56655532</option>
                <option value="5665">&nbsp;-&nbsp;5665</option>
                <option value="676">&nbsp;-&nbsp;676</option>
                <option value="2">&nbsp;-&nbsp;2</option>
                <option value="3">&nbsp;-&nbsp;3</option>
                <option value="1" selected="selected">&nbsp;-&nbsp;1</option>
                <option value="">&nbsp;</option>
                <option value="">&nbsp;</option>
                <option value="1" selected="selected">1&nbsp;-&nbsp;</option>
                <option value="2">2&nbsp;-&nbsp;</option>
                <option value="3">3&nbsp;-&nbsp;</option>
                <option value="676">676&nbsp;-&nbsp;</option>
                <option value="5665">5665&nbsp;-&nbsp;</option>
                <option value="566555">566555&nbsp;-&nbsp;</option>
                <option value="5665553">5665553&nbsp;-&nbsp;</option>
                <option value="56655532">56655532&nbsp;-&nbsp;</option>
            </select>
                        </td>
        </tr>
          </tbody></table><br />    <br />

    <fieldset>
    <table border="0" cellpadding="5" cellspacing="0">
    <tr>
        <td valign="middle" nowrap="nowrap">
            <select name="submit_type" tabindex="5">
                <option value="Grabar">Grabar</option>
                    <option value="Insertar como una nueva fila">Insertar como una nueva fila</option>
            </select>
    
        </td>
        <td valign="middle">
            &nbsp;&nbsp;&nbsp;<strong>y luego</strong>&nbsp;&nbsp;&nbsp;
        </td>
        <td valign="middle" nowrap="nowrap">
            <select name="after_insert">
                <option value="back" selected="selected">Volver</option>
                <option value="new_insert" >Insertar un nuevo registro</option>
                <option value="same_insert" >Volver a esta página</option>
                </select>
        </td>
    </tr>

    <tr>
        <td>
<sup class="footnotemarker" id="footnote_sup_1_1">1</sup>        </td>
        <td colspan="3" align="right" valign="middle">
            <input type="submit" value="Continuar" tabindex="10" id="buttonYes" />
            <input type="reset" value="Reiniciar" tabindex="11" />
        </td>
    </tr>
    </table>
    </fieldset>
    </form>
<div class="notice"><span id="footnote_1"><sup>1</sup> Use la tecla TAB para saltar de un valor a otro, o CTRL+flechas para moverse a cualquier parte</span><br /></div><script type="text/javascript">
//<![CDATA[
// updates current settings
if (window.parent.setAll) {
    window.parent.setAll('es-utf-8', 'utf8_general_ci', '1', 'cvdb', 'aficiones', 'd57261dfd9273c4c8d0496e5fe050a27');
}
    // set current db, table and sql query in the querywindow
if (window.parent.reload_querywindow) {
    window.parent.reload_querywindow(
        'cvdb',
        'aficiones',
        '');
}
    
if (window.parent.frame_content) {
    // reset content frame name, as querywindow needs to set a unique name
    // before submitting form data, and navigation frame needs the original name
    if (typeof(window.parent.frame_content.name) != 'undefined'
     && window.parent.frame_content.name != 'frame_content') {
        window.parent.frame_content.name = 'frame_content';
    }
    if (typeof(window.parent.frame_content.id) != 'undefined'
     && window.parent.frame_content.id != 'frame_content') {
        window.parent.frame_content.id = 'frame_content';
    }
    //window.parent.frame_content.setAttribute('name', 'frame_content');
    //window.parent.frame_content.setAttribute('id', 'frame_content');
}
//]]>
</script>
<div id="selflink" class="print_ignore">
<a href="index.php?db=cvdb&amp;table=aficiones&amp;where_clause=%60aficiones%60.%60aficion%60+%3D+%27Bike%27+AND+%60aficiones%60.%60usuario_dni%60+%3D+1&amp;sql_query=SELECT+%2A+FROM+%60aficiones%60&amp;target=tbl_change.php&amp;token=d57261dfd9273c4c8d0496e5fe050a27" title="Abrir nueva ventana de phpMyAdmin" target="_blank"><img class="icon" src="./themes/darkblue_orange/img/window-new.png" alt="Abrir nueva ventana de phpMyAdmin" /></a>
</div>
</body>
</html>
