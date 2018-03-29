export default class Error {

    /**
     * Errors Constructor
     */
    constructor() {
        this.errors = {};
    }

    /**
     * Checks if error exists for given field
     *
     * @param field
     * @returns {boolean}
     */
    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    /**
     * Checks if any errors are present
     *
     * @returns {boolean}
     */
    any() {
        return Object.keys(this.errors).length > 0;
    }

    /**
     * Returns the error associated with given field
     *
     * @param field
     * @returns {*}
     */
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    /**
     * Records new error messages
     *
     * @param errors
     */
    record(errors) {
        this.errors = errors;
    }

    /**
     * Clears error messages
     *
     * @param field
     */
    clear(field) {
        if (field) {
            delete this.errors[field];
            return;
        }
        this.errors = {};

    }
}