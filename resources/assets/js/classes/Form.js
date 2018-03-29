import Error from './Error'

export default class Form {

    /**
     * Create new Form Instance
     *
     * @param data
     */
    constructor(data) {
        this.originalData = data;

        for (let field in data) {
            this[field] = data[field];
        }

        this.errors = new Error();
        this.busy = false;
        this.successful = false;

    }

    /**
     * Sets variables when form is submitted
     */
    startProcessing() {
        this.busy = true;
        this.successful = false;
    }

    /**
     * Processes variables after form is complete
     */
    stopProcesing() {
        this.busy = false;
        this.successful = !this.errors.any();
    }

    /**
     * Returns the form data
     */
    data() {
        let data = {};

        for (let property in this.originalData) {
            data[property] = this[property];
        }
        return data;
    }

    /**
     * Resets the form fields
     */
    reset() {
        for (let field in this.originalData) {
            this[field] = '';
        }

        this.stopProcesing();
        this.errors.clear();
    }

    /**
     * Submits a POST request to a given URL
     *
     * @param {string} url
     * @returns {*}
     */
    post(url) {
        return this.submit('post', url);
    }

    /**
     * Submits a DELETE request to a given URL
     *
     * @param url
     * @returns {Promise<any>}
     */
    delete(url) {
        return this.submit('delete', url);
    }

    /**
     * Submits a PATCH request to a given URL
     *
     * @param url
     * @returns {Promise<any>}
     */
    patch(url) {
        return this.submit('patch', url);
    }

    /**
     * Submits a PUT request to a given URL
     *
     * @param url
     * @returns {Promise<any>}
     */
    put(url) {
        return this.submit('put', url);
    }

    /**
     * Submits the Form
     *
     * @param requestType
     * @param url
     * @returns {Promise<any>}
     */
    submit(requestType, url) {
        this.startProcessing();
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);

                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data.errors);

                    reject(error.response.data.errors);
                });
        });
    }

    /**
     * Handle a successful form submission.
     *
     * @param {object} data
     */
    onSuccess(data) {
       this.successful = true;

        this.reset();
    }


    /**
     * Handle a failed form submission.
     *
     * @param {object} errors
     */
    onFail(errors) {
        this.errors.record(errors);
        this.stopProcesing();
    }
}