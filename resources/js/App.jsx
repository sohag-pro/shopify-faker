import { Provider } from "@shopify/app-bridge-react";
import { useState } from "react";

const App = () => {
    const [config] = useState( () => {

        const host = new URLSearchParams(location.search).get('host');

        window.__SHOPIFY_HOST = host;

        return {
            host,
            apiKey: import.meta.env.VITE_SHOPIFY_API_KEY,
            forceRedirect: true
        };
    })

    return (
        <Provider config={config}>
        <h1> Hello Shopify! </h1>
        </Provider>
    )
}

export default App;