import { createRoot } from "react-dom/client";
import Input from "./Input";
import Label from "./Label";
import Button from "./Button";
import InputWithLabel from "./InputWithLabel";

function Main(props) {
    return (
        <>
            <div className="mt-4 mb-4">
                <form action="/" method="get" className="container">
                    <InputWithLabel
                        type="number"
                        name="decimal"
                        id="decimal"
                        defaultValue="0"
                        text="Número em Decimal"
                    />
                    <InputWithLabel
                        type="number"
                        name="binary"
                        id="binary"
                        defaultValue="0"
                        text="Número em Binário"
                    />
                    <Button
                        type="submit"
                        name="converter"
                        value="binary"
                        text="Converter para Binário"
                    />
                    <Button
                        type="submit"
                        name="converter"
                        value="decimal"
                        text="Converter para Decimal"
                    />
                </form>
            </div>
        </>
    );
}

export default Main;

const domNode = document.getElementById("main-react");
const root = createRoot(domNode);
root.render(<Main />);
