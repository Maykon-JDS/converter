import Input from "./Input";
import Label from "./Label";

function InputWithLabel(props) {
    const { type } = props;
    const { name } = props;
    const { id } = props;
    const { defaultValue } = props;

    console.log(defaultValue)

    const { text } = props;
    const { htmlFor = id} = props;

    return (
        <div className="mb-3">
            <Label text={text}  htmlFor={htmlFor}/>
            <Input type={type} name={name} id={id} defaultValue={defaultValue}/>
        </div>
    );
}

export default InputWithLabel;
