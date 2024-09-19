import './bootstrap';

var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');
const cors = require('cors');

const config = require('./config');

var app = express();

app.use(cors(
  config.application.cors.server
));