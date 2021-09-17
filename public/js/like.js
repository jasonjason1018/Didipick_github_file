var LikeButton = React.createClass({ displayName: "likeButton",
  getInitialState: function () {
    return { liked: false };
  },
  handleClick: function (event) {
    this.setState({ liked: !this.state.liked });
  },
  render: function () {
    var text = this.state.liked ? '已加入最愛' : '加入最愛',
    stateClass = this.state.liked ? 'is-active' : '';
    return (
      React.createElement("button", { onClick: this.handleClick, className: 'button button-like ' + stateClass }, text));

  } });

  var FollowButton = React.createClass({ displayName: "followButton",
  getInitialState: function () {
    return { liked: false };
  },
  handleClick: function (event) {
    this.setState({ liked: !this.state.liked });
  },
  render: function () {
    var text = this.state.liked ? '已關注賣家' : '關注此賣家',
    stateClass = this.state.liked ? 'is-active' : '';
    return (
      React.createElement("button", { onClick: this.handleClick, className: 'button button-follow ' + stateClass }, text));

  } });


React.render(
React.createElement(LikeButton, null),
document.getElementById('likeBtn'));

React.render(
React.createElement(FollowButton, null),
document.getElementById('followBtn'));