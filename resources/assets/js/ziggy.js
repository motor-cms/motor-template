    var Ziggy = {
        namedRoutes: {"ajax.categories.index":{"uri":"ajax\/categories","methods":["GET","HEAD"],"domain":null},"ajax.files.index":{"uri":"ajax\/files","methods":["GET","HEAD"],"domain":null},"backend.pages.components.delete":{"uri":"backend\/pages\/{page}\/components\/{page_version_component}","methods":["DELETE"],"domain":null},"backend.pages.component_data.read":{"uri":"backend\/pages\/{page}\/component_data","methods":["GET","HEAD"],"domain":null},"backend.pages.component_data.update":{"uri":"backend\/pages\/{page}\/component_data","methods":["PATCH"],"domain":null},"component.texts.create":{"uri":"component\/texts","methods":["GET","HEAD"],"domain":null},"component.texts.store":{"uri":"component\/texts","methods":["POST"],"domain":null},"component.texts.edit":{"uri":"component\/texts\/{component_text}","methods":["GET","HEAD"],"domain":null},"component.texts.update":{"uri":"component\/texts\/{component_text}","methods":["PATCH"],"domain":null},"component.base.store":{"uri":"component\/base","methods":["POST"],"domain":null},"component.base.destroy":{"uri":"component\/base\/{base}","methods":["DELETE"],"domain":null}},
        baseUrl: 'http://motor.test/',
        baseProtocol: 'http',
        baseDomain: 'motor.test',
        basePort: false,
        defaultParameters: []
    };

    if (typeof window.Ziggy !== 'undefined') {
        for (var name in window.Ziggy.namedRoutes) {
            Ziggy.namedRoutes[name] = window.Ziggy.namedRoutes[name];
        }
    }

    export {
        Ziggy
    }
