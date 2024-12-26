function Input(props) {
    const { type } = props;
    const { name } = props;
    const { id } = props;
    const { defaultValue } = props;

    return (
        <>
            <input
                type={type}
                className="form-control"
                name={name}
                id={id}
                defaultValue={defaultValue}
            />
        </>
    );
}

export default Input;
