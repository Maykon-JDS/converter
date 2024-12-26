function Label(props) {
    const { text } = props;
    const { htmlFor } = props;

    return (
        <>
            <label htmlFor={htmlFor} className="form-label">
                {text}
            </label>
        </>
    );
}

export default Label;
