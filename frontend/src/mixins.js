export function mixins() {
    function formatMoney(value) {
        return new Intl.NumberFormat('vi-VN').format(value) + ' đ'
    }

    function getIdFromGid(value) {
        return value.split('/').pop()
    }

    return {
        formatMoney, getIdFromGid
    }
}
