/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.filebrowserBrowseUrl = '/dine-a-mite/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl = '/dine-a-mite/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = '/dine-a-mite/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = '/dine-a-mite/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = '/dine-a-mite/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = '/dine-a-mite/kcfinder/upload.php?type=flash';
    
    config.resize_enabled = false;
};
