import React, { Component } from "react";
import ReactDOM from "react-dom";

class FileReader extends Component {
    constructor(props) {
        super(props);
        this.state = {
            filecontent: ""
        };
    }
    render() {
        return (
            <div>
                <img src={this.state.filecontent} />
            </div>
        );
    }
}

export default FileReader;

if (document.getElementById("filereader")) {
    ReactDOM.render(<FileReader />, document.getElementById("filereader"));
}

const Parent = ReactDOM.render(
    <FileReader />,
    document.getElementById("filereader")
);

window.updatecontent = item => {
    Parent.setState({ filecontent: item });
};
