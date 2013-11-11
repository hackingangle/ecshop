<?php

function SendUploadResults( $values)
{
    // Minified version of the document.domain automatic fix script (#1919).
    // The original script can be found at _dev/domain_fix_template.js
    echo <<<EOF
<script type="text/javascript">
	var storedimgs = document.getElementById('uploadedimgs').value;

	document.getElementById('uploadedimgs').value = storedimgs + '$values,';
EOF;
	echo '</script>' ;
    exit ;
}