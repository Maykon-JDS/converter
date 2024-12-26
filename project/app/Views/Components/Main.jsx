import Button from "./Button";
import InputWithLabel from "./InputWithLabel";

function Main(props) {

    let { decimal = 0 } = props;

    let { binary = 0 } = props;

    return (
        <main>
            <div className="mt-4 mb-4">
                <form action="/" method="get" className="container">
                    <InputWithLabel
                        type="number"
                        name="decimal"
                        id="decimal"
                        defaultValue={ decimal }
                        text="Número em Decimal"
                    />
                    <InputWithLabel
                        type="number"
                        name="binary"
                        id="binary"
                        defaultValue={ binary }
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
        </main>
    );
}

export default Main;