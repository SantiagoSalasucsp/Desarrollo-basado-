from flask import Flask


app = Flask(__name__)

@app.route("/")
def home():
    return 'Hello World'

@app.route("/about")
def bout():
    return 'About page​'

@app.route("/otra​")
def otra():
    return 'otra​​'

if __name__== '__main__':
    app.run(debug=True)
    