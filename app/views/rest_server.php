<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href='<?=base_url('css/rest_server.css')?>'>

<div id="container">
    <h1>REST Server Tests</h1>

    <div id="body">

    <p>Followings are Restful server test for <a target="_blank" href="https://en.wikipedia.org/wiki/Create,_read,_update_and_delete">CRUD</a>
    (Create, read, update and delete) service with <a target="_blank" href="<?=base_url('user_access_control')?>">User</a> data in DB.</p>

    <h4>READ</h4>
    <p></p>
    <ul>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users'); ?>">Users</a> - defaulting to JSON</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/format/csv'); ?>">Users</a> - get it in CSV</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/id/1'); ?>">User #1</a> - defaulting to JSON  (users/id/1)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/1'); ?>">User #1</a> - defaulting to JSON  (users/1)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/id/1.xml'); ?>">User #1</a> - get it in XML (users/id/1.xml)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/id/1/format/xml'); ?>">User #1</a> - get it in XML (users/id/1/format/xml)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/id/1?format=xml'); ?>">User #1</a> - get it in XML (users/id/1?format=xml)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/1.xml'); ?>">User #1</a> - get it in XML (users/1.xml)</li>
        <li><a target='_blank' id="ajax" href="<?php echo base_url('api/user_api/users/format/json'); ?>">Users</a> - get it in JSON (AJAX request)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users.html'); ?>">Users</a> - get it in HTML (users.html)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users/format/html'); ?>">Users</a> - get it in HTML (users/format/html)</li>
        <li><a target='_blank' href="<?php echo base_url('api/user_api/users?format=html'); ?>">Users</a> - get it in HTML (users?format=html)</li>
    </ul>

    <h4>CREATE</h4>
    <pre>
    Create, Update, and Delete tests can be done with <a target="_blank" href="http://curl.haxx.se">cURL</a> tool.
    Here is an example to test CREATE with cURL tool.
    You can open your PHP (make sure your php has loaded cURL library) and run following code:
    <code>
   $data = array(
            "firstname" => "TestUser"
            ,"lastname" => "create"
            ,"username" => "test_api_user"
            ,"password" => "test_api_user"
            ,"email"    => "testapi@email.com"
         );

    $data_string = json_encode($data);
    
    $ch = curl_init('http://seungwoochoi.com/api/user_api/users');
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
       'Content-Length:' . strlen($data_string))
    );
    
    $result = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $contenttype = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
    print "Status: $httpcode" . "\n";
    print "Content-Type: $contenttype" . "\n";
    print "\n" . $result . "\n";
    </code>
    </pre>
    <h4>UPDATE</h4>
    <pre>
    Update test is mostly same with CREATE test, just change few code from above:
    <code><span class='delete_code'>
-    $data = array(
-            "firstname" => "TestUser"
-            ,"lastname" => "create"
-            ,"username" => "test_api_user"
-            ,"password" => "test_api_user"
-            ,"email"    => "testapi@email.com"
-         );</span>
<span class='add_code'>
+    $data = array(
+            "id"    => 8
+            ,"firstname" => "TestUser"
+            ,"lastname" => "update"
+            ,"username" => "test_api_user"
+            ,"password" => "test_api_user"
+            ,"email"    => "testapi@email.com" );</span>
    <span class='delete_code'>
-    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");</span><span class='add_code'>
+    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");</span>

    </code>
    </pre>        
    <h4>DELETE</h4>
    <pre>
    And here are the changes for DELETE test:
    <code>
    <span class='delete_code'>
-    $data_string = json_encode($data);</span><span class='add_code'>
+    $data_string = json_encode(array('id'=>8));</span>
    <span class='delete_code'>
-    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");</span><span class='add_code'>
+    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");</span>

    </code>
    </pre>        

    </div> <!-- body div -->



<script>
    // Create an 'App' namespace
    var App = App || {};

    // Basic rest module using an IIFE as a way of enclosing private variables
    App.rest = (function (window, $) {
        // Fields

        // Cache the jQuery selector
        var $_ajax = null;

        // Methods (private)

        // Called on Ajax done
        function ajaxDone(data) {
            // The 'data' parameter is an array of objects that can be iterated over
            window.alert(JSON.stringify(data, null, 2));
        }

        // Called on Ajax fail
        function ajaxFail() {
            window.alert('Oh no! A problem with the Ajax request!');
        }

        // On Ajax request
        function ajaxEvent($this) {
            $.ajax({
                    // URL from the link that was 'clicked' on
                    url: $this.attr('href')
                })
                .done(ajaxDone)
                .fail(ajaxFail);
        }

        // Bind event(s)
        function bind() {
            // Namespace the 'click' event
            $_ajax.on('click.app.rest.module', function (event) {
                event.preventDefault();

                // Pass this to the Ajax event function
                ajaxEvent($(this));
            });
        }

        // Cache the DOM node(s)
        function cacheDom() {
            $_ajax = $('#ajax');
        }

        // Public API
        return {
            init: function () {
                // Cache the DOM and bind event(s)
                cacheDom();
                bind();
            }
        };
    })(window, jQuery);

    // DOM ready event
    $(function () {
        // Initialise the App module
        App.rest.init();
    });

</script>
