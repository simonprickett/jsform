<?php header("Content-Type: text/xml;"); ?>
<?php printf('<?xml version="1.0" ?>'); ?>
<page xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsd-version="1.12" xsi:noNamespaceSchemaLocation="http://www.netbiscuits.com/schema/netbiscuits-1.12.xsd">
    <external type="script" file="scripts/formscript.js"/>
    <container> 
        <column>
            <FORM action="jumppage.php" method="POST" name="linkform">
                <row>
                    <cell>
                        <text/>
                    </cell>
                </row>
                <row>
                    <cell>
                        <input name="dropdown" type="select">
                            <event id="" type="onchange">
                                <action eval="goToPage()"/>
                            </event>
                            <option selected="selected" value=""/>
                            <option value="http://www.yahoo.com">Yahoo</option>
                            <option value="http://www.google.com">Google</option>
                        </input>
                    </cell>
                </row>
                <input type="submit" value="Submit"/>
            </FORM>
        </column>
    </container>
</page>