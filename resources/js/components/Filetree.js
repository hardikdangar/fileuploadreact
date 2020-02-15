import React, { Component } from "react";
import ReactDOM from "react-dom";

const File = ({ title, id, content }) => {
    return (
        <li className="nav-item" key={id}>
            <a className="nav-link bold" href="#">
                Document #{id}
            </a>
            <a className="nav-link" href="#">
                {title}
            </a>
        </li>
    );
};

const FileList = ({ files }) => {
    const fileNode = files.map((file, index) => {
        return <File title={file.title} id={index} content={file.content} />;
    });
    return <>{fileNode}</>;
};

class Filetree extends Component {
    constructor(props) {
        // Pass props to parent class
        super(props);
        // Set initial state
        this.state = {
            items: []
        };
    }

    render() {
        return (
            <>
                <FileList files={this.state.items} />
            </>
        );
    }
}

export default Filetree;
if (document.getElementById("filetree")) {
    ReactDOM.render(<Filetree />, document.getElementById("filetree"));
}

const Parent = ReactDOM.render(
    <Filetree />,
    document.getElementById("filetree")
);

window.id = 1;

window.updateFileList = (item, content) => {
    const file = { title: item.name, id: window.id++, content: content };

    Parent.state.items.push(file);

    Parent.setState({ items: Parent.state.items });
};
