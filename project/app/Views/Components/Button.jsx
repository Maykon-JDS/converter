function Button(props) {
    const { type } = props;
    const { name } = props;
    const { value } = props;
    const { text } = props;


    return (
        <button
            type={type}
            name={name}
            value={value}
            className="btn btn-primary me-1"
        >
            {text}
        </button>
    );
}

export default Button;
