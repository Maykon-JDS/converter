import React, { StrictMode, useState, Suspense } from "react";
import CircularIndeterminateLoading from "../../../app/Views/Components/CircularIndeterminateLoading.jsx";
import Header from "../../../app/Views/Components/Header.jsx";
import Main from "../../../app/Views/Components/Main.jsx";
import Footer from "../../../app/Views/Components/Footer.jsx";
import { createRoot } from "react-dom/client";

let sessionData = JSON.parse(sessionStorage.session);

function App() {
    return (
        <Suspense fallback={<div>Testando</div>}>
            <StrictMode>
                <Header title="Converter" />
                <Main binary={ sessionData.binary } decimal={ sessionData.decimal } />
                <Footer />
            </StrictMode>
        </Suspense>
    );
}

export default App;

const domNode = document.getElementById("app-react");

const root = createRoot(domNode);

root.render(<App />);
