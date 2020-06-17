
plugin.tx_videomodal_videomodal {
    view {
        # cat=plugin.tx_videomodal_videomodal/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:video_modal/Resources/Private/Templates/
        # cat=plugin.tx_videomodal_videomodal/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:video_modal/Resources/Private/Partials/
        # cat=plugin.tx_videomodal_videomodal/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:video_modal/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_videomodal_videomodal//a; type=string; label=Default storage PID
        storagePid =
    }
}
