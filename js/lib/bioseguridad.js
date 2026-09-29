// BCH Ajax Plugin - Copyright UNEP/SCBD Biosafety Unit 2001-2011
document.writeln("<script type='text/javascript' charset='utf-8' src='https://www.dinama.gub.uy/oan/wp-content/themes/observatorio-theme4/bioseguridad/js/jquery-1.6.4-custom-min.js'></script>");
document.writeln("<script type='text/javascript' charset='utf-8' src='https://www.dinama.gub.uy/oan/wp-content/themes/observatorio-theme4/bioseguridad/js/axscript-4.5.0.min.js'></script>");

function GenerateRecords(_type, _country, _locale)
{
    var placeHolderID = "A447572CB9704152810667EBDCB151E7"; //Default behaviour

    if(document.getElementById(placeHolderID)==null)
	    document.writeln('<div id="'+placeHolderID+'"></div>');

    try {
        var localPlaceHolderID = "BCH"+((Math.random()*1000000)|0)+""+((Math.random()*1000000)|0)+""+((Math.random()*1000000)|0);

        document.writeln('<div id="'+localPlaceHolderID+'"></div>');

        placeHolderID = localPlaceHolderID;
    }
    catch(e)
    {
        if(console && console.error)
            console.error(e)
    }

	(function($, params)
	{
		if(!$.cms.ajaxCallbackSuccess_Overrided)
		{
			(function(base_ajaxCallbackSuccess)
			{
				$.cms.extend({ ajaxCallbackSuccess_Overrided : true, ajaxCallbackSuccess : function(message)
				{

                    var callbackplaceHolderID = (message.match(/^\$\("#(BCH\d+)/)||[])[1] || placeHolderID; // get id from: $("#BCH647813940347304424").append(...

					//Clear loading info 
					$("#"+callbackplaceHolderID+" > #axLoading").remove();

					$.cms.IsPosting = true;
					base_ajaxCallbackSuccess.call($.cms, message);
				}});
			})($.cms.ajaxCallbackSuccess);
		}

		$(document).ready(function()
		{
			// Load module asyc
			$.cms.ServerUrl = "https://bch.cbd.int";
			$.cms.ajaxInstantiate("Bch.UI.Ajax.DocumentList,BchUI", placeHolderID, "<String>"+params.type+"</String><String>"+params.country+"</String><String>"+params.locale+"</String>");
			$.cms.IsPosting = false;

			if($("#"+placeHolderID+" > #axLoading").size()==0)
			{
				//Add loading info 

				$("#"+placeHolderID).append("<div id='axLoading'><img src='"+$.cms.ServerUrl+"/images/wait-blue.gif'/></div>");

				var qAxLoading = $("#"+placeHolderID+" > #axLoading");

				if(params.locale=="fr") qAxLoading.append("<span>Chargement, veuillez patienter...</span>");
				else				    qAxLoading.append("<span>Cargando...</span>");
			}
		});
	})(jQuery164, { type : _type, country : _country, locale : _locale });
}