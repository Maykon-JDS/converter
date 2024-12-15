
import RefreshRuntime from 'http://localhost:8002/@react-refresh'

function configRefresh(){

    RefreshRuntime.injectIntoGlobalHook(window)

    window.$RefreshReg$ = () => {}

    window.$RefreshSig$ = () => (type) => type

    window.__vite_plugin_react_preamble_installed__ = true

}

configRefresh();