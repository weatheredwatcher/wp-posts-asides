(function() {
    tinymce.create('tinymce.plugins.vz_aside', {
        init : function(ed, url) {
        	ed.addCommand('vz_aside_cmd', function() {
				ed.windowManager.open({
					file : url + '/aside_popup.php',
					width : 340 + parseInt(ed.getLang('button.delta_width', 0)),
					height : 350 + parseInt(ed.getLang('button.delta_height', 0)),
					inline : 1
					}, {
					plugin_url : url
				});
			});

            ed.addButton('vz_aside', {
                title : 'Insert Aside',
                image : url + '/aside.png',
                cmd: 'vz_aside_cmd'
            });
        },
		getInfo : function() {
			return {
				longname : "Verizon Aside Shortcode",
				author : 'David Duggins',
				authorurl : 'http://weatheredwatcher.com/',
				infourl : 'http://weatheredwatcher.com/',
				version : "1.0"
			};
		}
    });
    tinymce.PluginManager.add('vz_aside', tinymce.plugins.vz_aside);
})();
/**(function() {
	tinymce.create('tinymce.plugins.vz_aside', {
		init : function(ed, url) {
			ed.addButton('vz_aside', {
				title : 'Insert Aside',
				image : url+'/aside.png',
				onclick : function() {
					//idPattern = /(?:(?:[^v]+)+v.)?([^&=]{11})(?=&|$)/;
					var m = prompt("YouTube Video", "Enter the id or url for your video");

					if (m != null && m != 'undefined')
						ed.execCommand('mceInsertContent', false, '[aside id="'+m+'"]');
				}
			});
		},
		createControl : function(n, cm) {
			return null;
		},
		getInfo : function() {
			return {
				longname : "Verizon Aside Shortcode",
				author : 'David Duggins',
				authorurl : 'http://weatheredwatcher.com/',
				infourl : 'http://weatheredwatcher.com/',
				version : "1.0"
			};
		}
	});
	tinymce.PluginManager.add('vz_aside', tinymce.plugins.vz_aside);
})(); */