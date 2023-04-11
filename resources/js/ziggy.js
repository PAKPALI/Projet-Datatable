const Ziggy = {
    "url":"http://127.0.0.1:1234",
    "port":null,
    "defaults":{},
    "routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},
    "ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},
    "ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},
    "ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},
    "clientView":{"uri":"getClient","methods":["GET","HEAD"]},
    "a":{"uri":"home","methods":["GET","HEAD"]},
    "niveau":{"uri":"niveau","methods":["GET","HEAD"]},
    "etudiant.list":{"uri":"etudiant\/list","methods":["GET","HEAD"]},
    "etudiant.create":{"uri":"etudiant\/create","methods":["GET","HEAD"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
