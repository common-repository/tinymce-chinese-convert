(function() {
	tinymce.create('tinymce.plugins.convert_traditional', {
		init : function(ed, url) {
			ed.addButton('convert_traditional', {
				title : '轉換至繁體中文',
				image : url+'/img/convert_traditional.png',
				onclick : function() {
					var text, activeeditor;
					var activeeditor_selection = tinyMCE.activeEditor.selection.getContent();
					if(activeeditor_selection == "" || activeeditor_selection == null){
						text = tinyMCE.activeEditor.getContent();
						activeEditor = tinyMCE.activeEditor;
					}else{
						text = activeeditor_selection;
						activeEditor = tinyMCE.activeEditor.selection;
					}
					text = convert_to_difference_locate(text, "cn", "tw");
					activeEditor.setContent(convertText(text, "big5"));
				}
			});
		},
		createControl : function(n, cm) {
			return null;
		},
		getInfo : function() {
			return {
				longname : "TinyMCE Chinese Convert",
				author : 'Arefly',
				authorurl : 'https://www.arefly.com',
				infourl : 'http://wordpress.org/plugins/tinymce-chinese-convert',
				version : "1.0"
			};
		}
	});
	tinymce.PluginManager.add('convert_traditional', tinymce.plugins.convert_traditional);
})();
