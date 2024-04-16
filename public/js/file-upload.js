function singleImageCreate(identifier, maxFileSize) {
    fileAction(identifier, {
        maxFileSize: maxFileSize, overwriteInitial: false, maxFileCount: 1,
    });
}

function singleImageEdit(identifier, imageLink, maxFileSize) {
    let link = (imageLink === null || imageLink === '') ? [] : [imageLink];
    fileAction(identifier, {
        maxFileSize: maxFileSize,
        initialPreview: link,
        overwriteInitial: true,
        fileActionSettings: {
            removeClass: 'd-none'
        },
        maxFileCount: 1,
    });
}

function multipleImageCreate(identifier, maxFileSize, maxFileCount) {
    fileAction(identifier, {
        maxFileSize: maxFileSize,
        maxFileCount: maxFileCount,
        overwriteInitial: false,
    })
}

function multipleImageEdit(identifier, images, maxFileSize, maxFileCount, removeUrl) {
    let images_link = [];
    let images_name = [];
    $.each(images, function (index, image) {
        images_link.push(image.image_link);
        let image_name = {
            caption: image.image, key: index, url: image.id + removeUrl, showDrag: false, showRotate: false
        };
        images_name.push(image_name);
    });

    fileAction(identifier, {
        maxFileSize: maxFileSize,
        maxFileCount: maxFileCount,
        overwriteInitial: false,
        fileActionSettings: {
            removeClass: 'btn btn-danger btn-icon btn-xs',
        },
        initialPreview: images_link,
        initialPreviewConfig: images_name,
    });
}

function fileAction(identifier, additionalAttributes, browseLabel = 'Pick Image') {
    let commonAttributes = {
        browseClass: "btn btn-secondary",
        browseLabel: browseLabel,
        removeClass: "btn btn-danger",
        showUpload: false,
        browseIcon: '<i class="fa fa-plus"></i>',
        // removeIcon: '<i class="fa fa-trash"></i>',
        initialPreviewAsData: true,
    }
    let fileAttributes = {...commonAttributes, ...additionalAttributes}
    $(identifier).fileinput(fileAttributes);
}
