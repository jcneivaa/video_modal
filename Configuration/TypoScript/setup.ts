
plugin.tx_videomodal_videomodal {
    view {
        templateRootPaths.0 = EXT:video_modal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_videomodal_videomodal.view.templateRootPath}
        partialRootPaths.0 = EXT:video_modal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_videomodal_videomodal.view.partialRootPath}
        layoutRootPaths.0 = EXT:video_modal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_videomodal_videomodal.view.layoutRootPath}
    }

    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

page{
    includeCSS {


        
    }

    includeJS{


    }

    includeJSFooter{

        video = EXT:video_modal/Resources/Public/Js/video.js 
    }

}