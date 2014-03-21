# Contact us and Google map marker helper #

This module will create relevant template and fields for contact us page. Also includes google map location feature. Idea of this module is simply saving time without creating fields and templates when it comes to usage.

## Using Contact us & Map helper ##

### How to install ###

1. Copy the files for this module to /site/modules/ContactUsAndMapHelper/
2. In admin: Modules > Check for new modules. 
3. Click *install* for the Contact us and Map Helper. 
4. Copy the contact.php to templates directory.



### How to use ###

Add this somewhere before your closing `</head>` tag:
````
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?sensor=false'></script>
````

To render google map on your page just use: 
````
<?php echo $modules->get('MearchContactUsAndMapHelper')->renderGoogleLocationMap();?>
````

#### Notes ####
 - Make sure you include jquery on before end your header tag.
 - Use necessary styling for rendered google map.

````
    <style type="text/css">
            /* google map div */
            div#map {
                width: 100%;
                height: 300px;
            }
    </style>
````

