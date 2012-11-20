<?php

Sanitize::set('HTML.Allowed', 'a[href|rel|rev|target|title|style],' .
		'b[style],'.
		'br[clear],'.
		'caption[style],'.
		'center[style],'.
		'col[align|charoff|span|valign|width],'.
		'colgroup[align|charoff|span|valign|width],'.
		'em[style],'.
		'font[color|face|size|style],'.
		'h1[align|style],'.
		'hr[align|noshade|size|width|style],'.
		'img[align|alt|border|height|hspace|src|vspace|width|style],'.
		'li[type|value|style],'.
		'ol[start|type|style],'.
		'p[align|style],'.
		'span[style],'.
		'u[style],'.
		'ul[type|style],'.
		'strong');
		
// Block images coming from remote host
Sanitize::set('URI.DisableExternalResources', true);
Sanitize::set('Cache.SerializerPath',Director::baseFolder() . '/silverstripe-cache/purifier');
Object::add_extension('DataObject', 'SanitizeDataObject');